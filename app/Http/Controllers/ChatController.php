<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class ChatController extends Controller
{
    public function index() {
        return view('chat');
    }

    public function search(Request $request)
{
    $message = strtolower($request->question);

    // Remove punctuation
    $message = preg_replace('/[^\p{L}\p{N}\s]/u', '', $message);

    // Split message into words
    $messageWords = preg_split('/\s+/', $message);

    $faqs = Faq::with('keywords.synonyms', 'links')->get();

    $bestFaq = null;
    $highestScore = 0;

    foreach ($faqs as $faq)
    {
        $score = 0;

        foreach ($faq->keywords as $keyword)
        {
            // Check keywords
            foreach ($keyword->keywords as $word)
            {
                if (in_array(strtolower($word), $messageWords))
                {
                    $score++;
                }
            }

            // Check synonyms
            foreach ($keyword->synonyms as $synonym)
            {
                foreach ($synonym->words as $word)
                {
                    if (in_array(strtolower($word), $messageWords))
                    {
                        $score++;
                    }
                }
            }
        }

        // Choose the FAQ with the highest score.
        // If scores are equal, use priority.
        if (
            $score > $highestScore ||
            (
                $score == $highestScore &&
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

    if (!$bestFaq)
    {
        return response()->json([
            'title' => 'No answer found',
            'answer' => "Sorry, I couldn't find an answer to that. Please try asking your question differently or contact yout EPD coordinator or teachers.",
            'links' => []
        ]);
    }

    return response()->json($bestFaq);
}
}
