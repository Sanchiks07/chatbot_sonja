<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\Faq;

class ChatController extends Controller
{
    private const MAX_FUZZY_DISTANCE_SHORT = 1;
    private const MAX_FUZZY_DISTANCE_LONG = 2;

    private function normalizeText(string $text): string
    {
        $normalized = mb_strtolower(trim($text));
        $normalized = preg_replace('/[^\p{L}\p{N}\s]/u', '', $normalized) ?? '';

        return preg_replace('/\s+/u', ' ', trim($normalized)) ?? '';
    }

    private function isFuzzyTokenMatch(string $inputWord, string $candidateWord): bool
    {
        if ($inputWord === $candidateWord) {
            return true;
        }

        // Very short words are too ambiguous for fuzzy matching (e.g., "is" vs "id").
        if (strlen($inputWord) <= 3 || strlen($candidateWord) <= 3) {
            return false;
        }

        $candidateLength = strlen($candidateWord);

        if ($candidateLength === 0) {
            return false;
        }

        if (abs(strlen($inputWord) - $candidateLength) > self::MAX_FUZZY_DISTANCE_LONG) {
            return false;
        }

        $shorterLength = min(strlen($inputWord), $candidateLength);

        // For short and medium words, allow only one edit to avoid semantic drift
        // like "store" matching "stolen" while still allowing typo fixes.
        $maxDistance = $shorterLength <= 6
            ? self::MAX_FUZZY_DISTANCE_SHORT
            : self::MAX_FUZZY_DISTANCE_LONG;

        return levenshtein($inputWord, $candidateWord) <= $maxDistance;
    }

    private function containsFuzzyWord(array $messageWords, string $candidateWord): bool
    {
        foreach ($messageWords as $messageWord) {
            if ($this->isFuzzyTokenMatch($messageWord, $candidateWord)) {
                return true;
            }
        }

        return false;
    }

    private function getWordMatchType(array $messageWords, string $candidateWord): ?string
    {
        foreach ($messageWords as $messageWord) {
            if ($messageWord === $candidateWord) {
                return 'exact';
            }
        }

        foreach ($messageWords as $messageWord) {
            if ($this->isFuzzyTokenMatch($messageWord, $candidateWord)) {
                return 'fuzzy';
            }
        }

        return null;
    }

    private function containsFuzzyPhrase(array $messageWords, array $candidateWords): bool
    {
        $candidateWordCount = count($candidateWords);
        $messageWordCount = count($messageWords);

        if ($candidateWordCount === 0 || $candidateWordCount > $messageWordCount) {
            return false;
        }

        $maxStartIndex = $messageWordCount - $candidateWordCount;

        for ($startIndex = 0; $startIndex <= $maxStartIndex; $startIndex++) {
            $allWordsMatch = true;

            for ($offset = 0; $offset < $candidateWordCount; $offset++) {
                if (!$this->isFuzzyTokenMatch($messageWords[$startIndex + $offset], $candidateWords[$offset])) {
                    $allWordsMatch = false;
                    break;
                }
            }

            if ($allWordsMatch) {
                return true;
            }
        }

        return false;
    }

    private function isEmergencyFaq(Faq $faq): bool
    {
        $categoryName = $faq->category?->name;

        if (!is_string($categoryName) || $categoryName === '') {
            return false;
        }

        return mb_strtolower($categoryName) === 'emergency';
    }

    private function hasStrongEmergencySignal(string $candidate): bool
    {
        static $strongSignals = [
            '112', 'emergency', 'fire', 'burn', 'burning', 'smoke', 'ambulance', 'police',
            'danger', 'unsafe', 'injury', 'injured', 'accident', 'crime', 'theft', 'stolen',
            'unconscious', 'medical', 'evacuation', 'earthquake', 'flood', 'storm', 'assault',
            'robbery', 'passport', 'id', 'seizure', 'rescue', 'die', 'dying',
        ];

        $candidateWords = preg_split('/\s+/', $candidate, -1, PREG_SPLIT_NO_EMPTY) ?: [];

        foreach ($candidateWords as $word) {
            if (in_array($word, $strongSignals, true)) {
                return true;
            }
        }

        return false;
    }

    private function messageHasStrongEmergencySignal(array $messageWords): bool
    {
        static $strongSignals = [
            '112', 'emergency', 'fire', 'burn', 'burning', 'smoke', 'ambulance', 'police',
            'danger', 'unsafe', 'injury', 'injured', 'accident', 'crime', 'theft', 'stolen',
            'unconscious', 'medical', 'evacuation', 'earthquake', 'flood', 'storm', 'assault',
            'robbery', 'passport', 'seizure', 'rescue', 'die', 'dying',
        ];

        foreach ($messageWords as $word) {
            if (in_array($word, $strongSignals, true)) {
                return true;
            }
        }

        return false;
    }

    public function index() {
        return view('chat');
    }

    public function search(Request $request): JsonResponse {
        $validator = Validator::make($request->all(), ['question' => ['bail', 'required', 'string', 'min:2', 'max:500'],]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Please enter a question between 2 and 500 characters.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $message = $this->normalizeText($validator->validated()['question']);
        $messageWords = preg_split('/\s+/', $message, -1, PREG_SPLIT_NO_EMPTY) ?: [];

        if ($messageWords === []) {
            return response()->json([
                'message' => 'Please ask a question using letters or numbers.',
            ], 422);
        }

        $faqs = Faq::with(['category', 'keywords.synonyms', 'links'])
            ->get(['id', 'category_id', 'title', 'answer', 'priority']);

        $messageHasStrongEmergencySignal = $this->messageHasStrongEmergencySignal($messageWords);

        $bestFaq = null;
        $highestPhraseScore = 0;
        $highestExactWordScore = 0;
        $highestFuzzyWordScore = 0;
        $bestEmergencyFaq = null;
        $highestEmergencyPhraseScore = 0;
        $highestEmergencyExactWordScore = 0;
        $highestEmergencyFuzzyWordScore = 0;
        $bestEmergencyHasStrongSignal = false;

        foreach ($faqs as $faq) {
            $phraseScore = 0;
            $exactWordScore = 0;
            $fuzzyWordScore = 0;
            $faqHasStrongEmergencySignal = false;

            foreach ($faq->keywords as $keyword) {
                foreach ($keyword->keywords ?? [] as $candidate) {
                    $normalizedCandidate = $this->normalizeText((string) $candidate);

                    if ($normalizedCandidate === '') {
                        continue;
                    }

                    if (preg_match('/\s/u', $normalizedCandidate) === 1) {
                        $candidateWords = preg_split('/\s+/', $normalizedCandidate, -1, PREG_SPLIT_NO_EMPTY) ?: [];

                        if ($this->containsFuzzyPhrase($messageWords, $candidateWords)) {
                            $phraseScore++;

                            if ($this->isEmergencyFaq($faq) && $this->hasStrongEmergencySignal($normalizedCandidate)) {
                                $faqHasStrongEmergencySignal = true;
                            }
                        }

                        continue;
                    }

                    $wordMatchType = $this->getWordMatchType($messageWords, $normalizedCandidate);

                    if ($wordMatchType === 'exact') {
                        $exactWordScore++;

                        if ($this->isEmergencyFaq($faq) && $this->hasStrongEmergencySignal($normalizedCandidate)) {
                            $faqHasStrongEmergencySignal = true;
                        }
                    } elseif ($wordMatchType === 'fuzzy') {
                        $fuzzyWordScore++;

                        if ($this->isEmergencyFaq($faq) && $this->hasStrongEmergencySignal($normalizedCandidate)) {
                            $faqHasStrongEmergencySignal = true;
                        }
                    }
                }

                foreach ($keyword->synonyms as $synonym) {
                    foreach ($synonym->words ?? [] as $candidate) {
                        $normalizedCandidate = $this->normalizeText((string) $candidate);

                        if ($normalizedCandidate === '') {
                            continue;
                        }

                        if (preg_match('/\s/u', $normalizedCandidate) === 1) {
                            $candidateWords = preg_split('/\s+/', $normalizedCandidate, -1, PREG_SPLIT_NO_EMPTY) ?: [];

                            if ($this->containsFuzzyPhrase($messageWords, $candidateWords)) {
                                $phraseScore++;

                                if ($this->isEmergencyFaq($faq) && $this->hasStrongEmergencySignal($normalizedCandidate)) {
                                    $faqHasStrongEmergencySignal = true;
                                }
                            }

                            continue;
                        }

                        $wordMatchType = $this->getWordMatchType($messageWords, $normalizedCandidate);

                        if ($wordMatchType === 'exact') {
                            $exactWordScore++;

                            if ($this->isEmergencyFaq($faq) && $this->hasStrongEmergencySignal($normalizedCandidate)) {
                                $faqHasStrongEmergencySignal = true;
                            }
                        } elseif ($wordMatchType === 'fuzzy') {
                            $fuzzyWordScore++;

                            if ($this->isEmergencyFaq($faq) && $this->hasStrongEmergencySignal($normalizedCandidate)) {
                                $faqHasStrongEmergencySignal = true;
                            }
                        }
                    }
                }
            }

            $faqHasPhraseMatch = $phraseScore > 0;
            $bestHasPhraseMatch = $highestPhraseScore > 0;

            if (
                ($faqHasPhraseMatch && !$bestHasPhraseMatch) ||
                (
                    $faqHasPhraseMatch &&
                    $bestHasPhraseMatch &&
                    (
                        $phraseScore > $highestPhraseScore ||
                        (
                            $phraseScore === $highestPhraseScore &&
                            (
                                !$bestFaq ||
                                $faq->priority > $bestFaq->priority
                            )
                        )
                    )
                ) ||
                (
                    !$faqHasPhraseMatch &&
                    !$bestHasPhraseMatch &&
                    (
                        $exactWordScore > $highestExactWordScore ||
                        (
                            $exactWordScore === $highestExactWordScore &&
                            (
                                $fuzzyWordScore > $highestFuzzyWordScore ||
                                (
                                    $fuzzyWordScore === $highestFuzzyWordScore &&
                                    ($exactWordScore > 0 || $fuzzyWordScore > 0) &&
                                    (
                                        !$bestFaq ||
                                        $faq->priority > $bestFaq->priority
                                    )
                                )
                            )
                        )
                    )
                )
            ) {
                $highestPhraseScore = $phraseScore;
                $highestExactWordScore = $exactWordScore;
                $highestFuzzyWordScore = $fuzzyWordScore;
                $bestFaq = $faq;
            }

            if ($this->isEmergencyFaq($faq)) {
                $emergencyHasPhraseMatch = $phraseScore > 0;
                $bestEmergencyHasPhraseMatch = $highestEmergencyPhraseScore > 0;

                if (
                    ($emergencyHasPhraseMatch && !$bestEmergencyHasPhraseMatch) ||
                    (
                        $emergencyHasPhraseMatch &&
                        $bestEmergencyHasPhraseMatch &&
                        (
                            $phraseScore > $highestEmergencyPhraseScore ||
                            (
                                $phraseScore === $highestEmergencyPhraseScore &&
                                (
                                    !$bestEmergencyFaq ||
                                    $faq->priority > $bestEmergencyFaq->priority
                                )
                            )
                        )
                    ) ||
                    (
                        !$emergencyHasPhraseMatch &&
                        !$bestEmergencyHasPhraseMatch &&
                        (
                            $exactWordScore > $highestEmergencyExactWordScore ||
                            (
                                $exactWordScore === $highestEmergencyExactWordScore &&
                                (
                                    $fuzzyWordScore > $highestEmergencyFuzzyWordScore ||
                                    (
                                        $fuzzyWordScore === $highestEmergencyFuzzyWordScore &&
                                        ($exactWordScore > 0 || $fuzzyWordScore > 0) &&
                                        (
                                            !$bestEmergencyFaq ||
                                            $faq->priority > $bestEmergencyFaq->priority
                                        )
                                    )
                                )
                            )
                        )
                    )
                ) {
                    $highestEmergencyPhraseScore = $phraseScore;
                    $highestEmergencyExactWordScore = $exactWordScore;
                    $highestEmergencyFuzzyWordScore = $fuzzyWordScore;
                    $bestEmergencyFaq = $faq;
                    $bestEmergencyHasStrongSignal = $faqHasStrongEmergencySignal;
                }
            }
        }

        if (
            $bestEmergencyFaq &&
            $messageHasStrongEmergencySignal &&
            $bestEmergencyHasStrongSignal &&
            (
                $highestEmergencyPhraseScore > 0 ||
                $highestEmergencyExactWordScore > 0 ||
                $highestEmergencyFuzzyWordScore > 0
            )
        ) {
            $bestFaq = $bestEmergencyFaq;
        }

        if (!$bestFaq) {
            return response()->json([
                'title' => 'No answer found',
                'answer' => "Sorry, I couldn't find an answer to that. Please try asking your question differently or contact your EPD coordinator or teachers.",
                'links' => [],
            ]);
        }

        return response()->json([
            'title' => $bestFaq->title,
            'answer' => $bestFaq->answer,
            'links' => $bestFaq->links
                ->filter(function ($link) {
                    $url = filter_var($link->url, FILTER_VALIDATE_URL);

                    if (!$url) {
                        return false;
                    }

                    $scheme = parse_url($url, PHP_URL_SCHEME);

                    return in_array($scheme, ['http', 'https'], true);
                })
                ->map(fn ($link) => [
                    'title' => $link->title,
                    'url' => $link->url,
                ])
                ->values()
                ->all(),
        ]);
    }
}
