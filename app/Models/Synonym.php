<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Keyword;

class Synonym extends Model
{
    protected $fillable = [
        'keyword_id',
        'words'
    ];

    protected $casts = [
        'words' => 'array'
    ];

    public function keyword() {
        return $this->belongsTo(Keyword::class);
    }
}
