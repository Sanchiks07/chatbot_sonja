<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;
use App\Models\Keyword;
use App\Models\Synonym;
use App\Models\Link;

class Faq extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'answer',
        'priority'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function keywords() {
        return $this->hasMany(Keyword::class);
    }

    public function links() {
        return $this->hasMany(Link::class);
    }
}
