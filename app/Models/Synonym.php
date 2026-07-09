<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Faq;

class Synonym extends Model
{
    protected $fillable = [
        'keyword_id',
        'word'
    ];

    public function faq() {
        return $this->belongsTo(Faq::class);
    }
}
