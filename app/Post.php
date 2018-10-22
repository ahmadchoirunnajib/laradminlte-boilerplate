<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'content', 'is_published', 'category_id'
    ];

    protected $casts = [
        'is_published' => 'boolean'
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
