<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Faq;
use App\Models\Synonym;

class Keyword extends Model
{
    protected $fillable = [
        'faq_id',
        'keywords'
    ];

    protected $casts = [
        'keywords' => 'array'
    ];

    public function faq() {
        return $this->belongsTo(Faq::class);
    }

    public function synonyms() {
        return $this->hasMany(Synonym::class);
    }
}
