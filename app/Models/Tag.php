<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = ['id'];

    public function translations()
    {
        return $this->hasMany(TagTranslation::class);
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_has_tags');
    }
}
