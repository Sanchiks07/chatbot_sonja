<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Faq;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function faqs() {
        return $this->hasMany(Faq::class);
    }
}
