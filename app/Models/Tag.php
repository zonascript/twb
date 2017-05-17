<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasManyPosts;

    protected $guarded = ['id'];

    public function translations()
    {
        return $this->hasMany(TagTranslation::class);
    }
}
