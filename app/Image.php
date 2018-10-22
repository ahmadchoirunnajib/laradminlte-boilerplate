<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'filename'
    ];

    public function work() {
        return $this->belongsTo(Post::class);
    }
}
