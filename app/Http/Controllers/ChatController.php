<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\Faq;

class ChatController extends Controller
{
    public function index() {
        return view('chat');
    }

    public function search(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'question' => ['bail', 'required', 'string', 'min:2', 'max:500'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Please enter a question between 2 and 500 characters.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $message = mb_strtolower(trim($validator->validated()['question']));
        $message = preg_replace('/[^\p{L}\p{N}\s]/u', '', $message) ?? '';
        $messageWords = preg_split('/\s+/', $message, -1, PREG_SPLIT_NO_EMPTY) ?: [];

        if ($messageWords === []) {
            return response()->json([
                'message' => 'Please ask a question using letters or numbers.',
            ], 422);
        }

        $faqs = Faq::with(['keywords.synonyms', 'links'])
            ->get(['id', 'title', 'answer', 'priority']);

        $bestFaq = null;
        $highestScore = 0;

        foreach ($faqs as $faq) {
            $score = 0;

            foreach ($faq->keywords as $keyword) {
                foreach ($keyword->keywords ?? [] as $word) {
                    if (in_array(mb_strtolower($word), $messageWords, true)) {
                        $score++;
                    }
                }

                foreach ($keyword->synonyms as $synonym) {
                    foreach ($synonym->words ?? [] as $word) {
                        if (in_array(mb_strtolower($word), $messageWords, true)) {
                            $score++;
                        }
                    }
                }
            }

            if (
                $score > $highestScore ||
                (
                    $score === $highestScore &&
                    $score > 0 &&
                    (
                        !$bestFaq ||
                        $faq->priority > $bestFaq->priority
                    )
                )
            ) {
                $highestScore = $score;
                $bestFaq = $faq;
            }
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
