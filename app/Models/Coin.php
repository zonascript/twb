<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $guarded = ['id'];
    protected $appends = ['total_score'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTotalScoreAttribute()
    {
        return Coin::where('user_id', $this->attributes['user_id'])->where('status', 1)->count();
    }
}
