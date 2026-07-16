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

    public function test_chat_search_prefers_phrase_match_over_single_word_priority_match(): void
    {
        $category = Category::create([
            'name' => 'General',
        ]);

        $emergencyFaq = Faq::create([
            'category_id' => $category->id,
            'title' => 'Emergency',
            'answer' => 'Call 112',
            'priority' => 100,
        ]);

        $foodFaq = Faq::create([
            'category_id' => $category->id,
            'title' => 'Food Support',
            'answer' => 'Here are food resources',
            'priority' => 1,
        ]);

        Keyword::create([
            'faq_id' => $emergencyFaq->id,
            'keywords' => ['help'],
        ]);

        Keyword::create([
            'faq_id' => $foodFaq->id,
            'keywords' => ['help im hungry'],
        ]);

        $response = $this->postJson('/chat/search', [
            'question' => 'help im hungry',
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('title', 'Food Support')
            ->assertJsonPath('answer', 'Here are food resources');
    }

    public function test_chat_search_matches_phrase_with_small_misspelling(): void
    {
        $category = Category::create([
            'name' => 'General',
        ]);

        $emergencyFaq = Faq::create([
            'category_id' => $category->id,
            'title' => 'Emergency',
            'answer' => 'Call 112',
            'priority' => 100,
        ]);

        $foodFaq = Faq::create([
            'category_id' => $category->id,
            'title' => 'Food Support',
            'answer' => 'Here are food resources',
            'priority' => 1,
        ]);

        Keyword::create([
            'faq_id' => $emergencyFaq->id,
            'keywords' => ['help'],
        ]);

        Keyword::create([
            'faq_id' => $foodFaq->id,
            'keywords' => ['help im hungry'],
        ]);

        $response = $this->postJson('/chat/search', [
            'question' => 'help im humgry',
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('title', 'Food Support')
            ->assertJsonPath('answer', 'Here are food resources');
    }

    public function test_chat_search_prioritizes_emergency_response_in_mixed_intent_message(): void
    {
        $foodCategory = Category::create([
            'name' => 'Food',
        ]);

        $emergencyCategory = Category::create([
            'name' => 'Emergency',
        ]);

        $foodFaq = Faq::create([
            'category_id' => $foodCategory->id,
            'title' => 'Food Support',
            'answer' => 'Here are food resources',
            'priority' => 9,
        ]);

        $emergencyFaq = Faq::create([
            'category_id' => $emergencyCategory->id,
            'title' => 'Fire Safety',
            'answer' => 'Leave the building and call 112',
            'priority' => 1,
        ]);

        Keyword::create([
            'faq_id' => $foodFaq->id,
            'keywords' => ['im hungry'],
        ]);

        Keyword::create([
            'faq_id' => $emergencyFaq->id,
            'keywords' => ['fire', 'burning'],
        ]);

        $response = $this->postJson('/chat/search', [
            'question' => 'im hungry and the house is burning',
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('title', 'Fire Safety')
            ->assertJsonPath('answer', 'Leave the building and call 112');
    }

    public function test_chat_search_prefers_money_over_generic_help_in_non_emergency_message(): void
    {
        $foodCategory = Category::create([
            'name' => 'Food',
        ]);

        $shoppingCategory = Category::create([
            'name' => 'Shopping',
        ]);

        $emergencyCategory = Category::create([
            'name' => 'Emergency',
        ]);

        $foodFaq = Faq::create([
            'category_id' => $foodCategory->id,
            'title' => 'Food Support',
            'answer' => 'Food answer',
            'priority' => 5,
        ]);

        $moneyFaq = Faq::create([
            'category_id' => $shoppingCategory->id,
            'title' => 'Money and Withdrawing Cash',
            'answer' => 'Money answer',
            'priority' => 7,
        ]);

        $emergencyFaq = Faq::create([
            'category_id' => $emergencyCategory->id,
            'title' => 'Emergency Numbers',
            'answer' => 'Call 112',
            'priority' => 10,
        ]);

        Keyword::create([
            'faq_id' => $foodFaq->id,
            'keywords' => ['im hungry'],
        ]);

        Keyword::create([
            'faq_id' => $moneyFaq->id,
            'keywords' => ['bank', 'i need a bank'],
        ]);

        Keyword::create([
            'faq_id' => $emergencyFaq->id,
            'keywords' => ['help', 'bag'],
        ]);

        $response = $this->postJson('/chat/search', [
            'question' => 'help im hungry and i need a bank',
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('title', 'Money and Withdrawing Cash')
            ->assertJsonPath('answer', 'Money answer');
    }

    public function test_chat_search_prefers_exact_bank_match_over_fuzzy_bag_match(): void
    {
        $shoppingCategory = Category::create([
            'name' => 'Shopping',
        ]);

        $emergencyCategory = Category::create([
            'name' => 'Emergency',
        ]);

        $moneyFaq = Faq::create([
            'category_id' => $shoppingCategory->id,
            'title' => 'Money and Withdrawing Cash',
            'answer' => 'Money answer',
            'priority' => 7,
        ]);

        $emergencyFaq = Faq::create([
            'category_id' => $emergencyCategory->id,
            'title' => 'Tourist Police',
            'answer' => 'Police answer',
            'priority' => 10,
        ]);

        Keyword::create([
            'faq_id' => $moneyFaq->id,
            'keywords' => ['bank'],
        ]);

        Keyword::create([
            'faq_id' => $emergencyFaq->id,
            'keywords' => ['bag'],
        ]);

        $response = $this->postJson('/chat/search', [
            'question' => 'im hungry and i need a bank',
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('title', 'Money and Withdrawing Cash')
            ->assertJsonPath('answer', 'Money answer');
    }

    public function test_chat_search_does_not_match_theft_on_short_word_is(): void
    {
        $emergencyCategory = Category::create([
            'name' => 'Emergency',
        ]);

        $theftFaq = Faq::create([
            'category_id' => $emergencyCategory->id,
            'title' => 'Tourist Police',
            'answer' => 'Theft answer',
            'priority' => 10,
        ]);

        Keyword::create([
            'faq_id' => $theftFaq->id,
            'keywords' => ['id'],
        ]);

        $response = $this->postJson('/chat/search', [
            'question' => 'is',
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('title', 'No answer found');
    }

    public function test_chat_search_does_not_match_theft_for_store_word(): void
    {
        $shoppingCategory = Category::create([
            'name' => 'Shopping',
        ]);

        $emergencyCategory = Category::create([
            'name' => 'Emergency',
        ]);

        $shoppingFaq = Faq::create([
            'category_id' => $shoppingCategory->id,
            'title' => 'Shopping Centre',
            'answer' => 'Shopping answer',
            'priority' => 5,
        ]);

        $theftFaq = Faq::create([
            'category_id' => $emergencyCategory->id,
            'title' => 'Tourist Police',
            'answer' => 'Theft answer',
            'priority' => 10,
        ]);

        Keyword::create([
            'faq_id' => $shoppingFaq->id,
            'keywords' => ['store'],
        ]);

        Keyword::create([
            'faq_id' => $theftFaq->id,
            'keywords' => ['stolen'],
        ]);

        $response = $this->postJson('/chat/search', [
            'question' => 'store',
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('title', 'Shopping Centre')
            ->assertJsonPath('answer', 'Shopping answer');
    }

    public function test_chat_search_where_is_the_store_does_not_trigger_natural_emergency(): void
    {
        $shoppingCategory = Category::create([
            'name' => 'Shopping',
        ]);

        $emergencyCategory = Category::create([
            'name' => 'Emergency',
        ]);

        $shoppingFaq = Faq::create([
            'category_id' => $shoppingCategory->id,
            'title' => 'Shopping Centre',
            'answer' => 'Shopping answer',
            'priority' => 5,
        ]);

        $emergencyFaq = Faq::create([
            'category_id' => $emergencyCategory->id,
            'title' => 'Natural Emergencies',
            'answer' => 'Emergency answer',
            'priority' => 10,
        ]);

        Keyword::create([
            'faq_id' => $shoppingFaq->id,
            'keywords' => ['store', 'where is the store'],
        ]);

        Keyword::create([
            'faq_id' => $emergencyFaq->id,
            'keywords' => ['storm'],
        ]);

        $response = $this->postJson('/chat/search', [
            'question' => 'where is the store',
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('title', 'Shopping Centre')
            ->assertJsonPath('answer', 'Shopping answer');
    }

    public function test_chat_search_prioritizes_emergency_when_message_contains_dying(): void
    {
        $foodCategory = Category::create([
            'name' => 'Food',
        ]);

        $emergencyCategory = Category::create([
            'name' => 'Emergency',
        ]);

        $foodFaq = Faq::create([
            'category_id' => $foodCategory->id,
            'title' => 'Food Support',
            'answer' => 'Food answer',
            'priority' => 9,
        ]);

        $emergencyFaq = Faq::create([
            'category_id' => $emergencyCategory->id,
            'title' => 'Emergency Numbers',
            'answer' => 'Call 112',
            'priority' => 1,
        ]);

        Keyword::create([
            'faq_id' => $foodFaq->id,
            'keywords' => ['im hungry'],
        ]);

        Keyword::create([
            'faq_id' => $emergencyFaq->id,
            'keywords' => ['dying'],
        ]);

        $response = $this->postJson('/chat/search', [
            'question' => 'im dying im hungry',
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('title', 'Emergency Numbers')
            ->assertJsonPath('answer', 'Call 112');
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