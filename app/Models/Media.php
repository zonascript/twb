<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasManyPosts;

    protected $guarded = ['id'];
    public $timestamps = false;
    protected $table = 'medias';

}
