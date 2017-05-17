<?php

namespace App\Service;


use App\Models\Menu as MenuModel;
use Illuminate\Support\Facades\DB;

class Menu
{
    public function getMenuQuery($params)
    {
        $query = DB::table('menus')
            ->join('menu_items as mi', 'menus.id', '=', 'mi.menu_id')
            ->join('menu_item_translations as mit', 'mi.id', '=', 'mit.menu_item_id')
            ->select('menus.*', 'mi.id as item_id', 'mi.parent_id', 'mi.link', 'mi.permission', 'mi.icon_class', 'mi.order', 'mit.locale', 'mit.title', 'mit.description');

        if (isset($params['lang'])) {
            $query = $query->where('mit.locale', $params['lang']);
        } else {
            $query = $query->where('mit.locale', config('app.locale'));
        }

        if (isset($params['item_id'])) {
            $query = $query->where('mi.id', $params['item_id']);
        }

        return $query;
    }

    public function getMenuById($menuId)
    {
        return MenuModel::find($menuId);
    }
}