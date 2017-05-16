<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function translations()
    {
        return $this->hasMany(CategoryTranslation::class);
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_has_categories');
    }
}
