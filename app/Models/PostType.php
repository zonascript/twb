<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    protected $guarded = ['id'];

    public function translations()
    {
        return $this->hasMany(PostTypeTranslation::class);
    }
}
