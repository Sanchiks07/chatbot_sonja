<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/chat', [ChatController::class, 'index'])->name('chat');
Route::post('/chat/search', [ChatController::class, 'search'])->middleware('throttle:chat-search')->name('chat.search');

Route::get('/offline-faqs', function () {
    return \App\Models\Faq::with([
        'keywords.synonyms',
        'links',
        'category'
    ])->get();
});