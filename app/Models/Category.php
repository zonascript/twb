<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasManyPosts;

    protected $guarded = ['id'];

    public function translations()
    {
        return $this->hasMany(CategoryTranslation::class);
    }
}
