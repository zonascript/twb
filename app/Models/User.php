<?php

namespace App\Model;

use App\Models\ColoringImage;
use App\Models\Post;
use App\Models\SocialAccount;
use App\Models\UserDetail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['coin_count', 'total_score'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'created_by');
    }

    public function detail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function coloringImages()
    {
        return $this->hasMany(ColoringImage::class);
    }

    public function coins()
    {
        return $this->hasMany(Coin::class);
    }

    // custom attr
    public function getCoinCountAttribute()
    {
        $coins = $this->coins()->where('status', 1)->count();
//        Log::warning(\GuzzleHttp\json_encode($coins->toSql()));
//        $coins = $coins->count();
        if ($coins == 15) {
            return $coins . '(COMPLETED)';
        }
        return $coins;
    }

    public function getTotalScoreAttribute()
    {
        return $this->coins()->where('status', 1)->sum('score');
    }
}
