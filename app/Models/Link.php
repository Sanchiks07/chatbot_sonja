<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Faq;

class Link extends Model
{
    protected $fillable = [
        'faq_id',
        'title',
        'url'
    ];

    public function faq() {
        return $this->belongsTo(Faq::class);
    }
}
