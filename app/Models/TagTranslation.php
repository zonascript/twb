<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagTranslation extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
