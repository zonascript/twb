<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    protected $table = 'medias';

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_has_medias');
    }

}
