<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $guarded = ['id'];
    protected $appends = ['total_score', 'status_description'];
    protected $statuses = [
        0 => 'OPEN',
        1 => 'APPROVED',
        2 => 'REJECTED'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTotalScoreAttribute()
    {
        return Coin::where('user_id', $this->attributes['user_id'])->where('status', 1)->count();
    }

    public function getStatusDescriptionAttribute()
    {
        $status = $this->attributes['status'];
        return $this->statuses[$status];
    }
}
