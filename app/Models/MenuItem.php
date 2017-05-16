<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function translations()
    {
        return $this->hasMany(MenuItemTranslation::class);
    }
}
