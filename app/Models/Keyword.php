<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Faq;

class Keyword extends Model
{
    protected $fillable = [
        'faq_id',
        'keyword'
    ];

    public function faq() {
        return $this->belongsTo(Faq::class);
    }
}
