<?php

namespace App\Models;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class ColoringImage extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
