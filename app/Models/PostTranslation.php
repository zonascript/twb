<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
