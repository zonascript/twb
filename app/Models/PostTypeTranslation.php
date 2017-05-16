<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTypeTranslation extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;

    public function postType()
    {
        return $this->belongsTo(PostType::class);
    }
}
