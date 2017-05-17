<?php

namespace App\Models;


trait HasManyPosts
{
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_has_tags');
    }
}