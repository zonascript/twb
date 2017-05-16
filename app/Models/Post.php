<?php

namespace App\Models;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];

    public function translations()
    {
        return $this->hasMany(PostTranslation::class);
    }

    public function metas()
    {
        return $this->hasMany(PostMeta::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_has_categories');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_has_tags');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
