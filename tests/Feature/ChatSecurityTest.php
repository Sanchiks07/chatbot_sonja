<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Keyword;
use App\Models\Link;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ChatSecurityTest extends TestCase
{
    use RefreshDatabase;

    public function test_chat_search_rejects_invalid_questions(): void
    {
        $response = $this->postJson('/chat/search', [
            'question' => '!',
        ]);

        $response
            ->assertStatus(422)
            ->assertJsonPath('message', 'Please enter a question between 2 and 500 characters.');
    }

    public function test_chat_search_filters_unsafe_links_from_the_response(): void
    {
        $this->createFaqWithKeywordAndLinks();

        $response = $this->postJson('/chat/search', [
            'question' => 'transport',
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('answer', 'Safe answer')
            ->assertJsonCount(1, 'links')
            ->assertJsonPath('links.0.url', 'https://example.com/guide');
    }

    public function test_chat_page_includes_security_headers(): void
    {
        $response = $this->get('/chat');

        $response->assertOk();
        $response->assertHeader('X-Content-Type-Options', 'nosniff');
        $response->assertHeader('X-Frame-Options', 'DENY');
        $response->assertHeader('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->assertHeader(
            'Content-Security-Policy',
            "default-src 'self'; base-uri 'self'; form-action 'self'; frame-ancestors 'none'; img-src 'self' data:; object-src 'none'; script-src 'self'; style-src 'self' 'unsafe-inline'"
        );
    }

    public function test_chat_search_is_rate_limited(): void
    {
        $this->createFaqWithKeywordAndLinks();

        for ($attempt = 0; $attempt < 20; $attempt++) {
            $this->withServerVariables(['REMOTE_ADDR' => '127.0.0.1'])
                ->postJson('/chat/search', ['question' => 'transport'])
                ->assertOk();
        }

        $this->withServerVariables(['REMOTE_ADDR' => '127.0.0.1'])
            ->postJson('/chat/search', ['question' => 'transport'])
            ->assertStatus(429);
    }

    private function createFaqWithKeywordAndLinks(): void
    {
        $category = Category::create([
            'name' => 'Transport',
        ]);

        $faq = Faq::create([
            'category_id' => $category->id,
            'title' => 'Transport help',
            'answer' => 'Safe answer',
            'priority' => 5,
        ]);

        Keyword::create([
            'faq_id' => $faq->id,
            'keywords' => ['transport'],
        ]);

        Link::create([
            'faq_id' => $faq->id,
            'title' => 'Safe guide',
            'url' => 'https://example.com/guide',
        ]);

        Link::create([
            'faq_id' => $faq->id,
            'title' => 'Unsafe guide',
            'url' => 'javascript:alert(1)',
        ]);
    }
}