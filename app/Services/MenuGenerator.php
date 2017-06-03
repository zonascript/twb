<?php

namespace App\Service;

use Illuminate\Http\Request;
use Lavary\Menu\Builder;
use LavaryMenu;

class MenuGenerator
{
    /**
     * @var Menu
     */
    private $menu;

    /**
     * MenuGenerator constructor.
     */
    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }

    /**
     * @param $menuId
     * @param string $type
     */
    public function generateMenu(Request $request, $menuId, $lang = null, $type = 'ul')
    {
        $params['id'] =$menuId;
        $theLang = config('app.locale');
        if (!is_null($lang)) {
            $theLang = $lang;
        }
        $params['lang'] = $theLang;
        $menus = $this->menu->getMenuQuery($params)
            ->orderBy('parent_id')
            ->orderBy('order')
            ->get();

        $menu = LavaryMenu::make('backendMenu', function($theMenu) use ($request, $menus, $theLang) {
            foreach ($menus as $menu) {
                if (userCan($menu->permission)) {
                    // get the 1st level
                    $thisItemLink = $menu->link != 'javascript:;' ? backendUrl($menu->link) : 'javascript';
                    if ($menu->parent_id == '0') {
                        $theMenu->add($menu->title, $thisItemLink)
                            ->nickname($menu->permission)
                            ->data(['icon_class' => $menu->icon_class, 'menu_link' => $thisItemLink]);
                    } else {
                        $parentMenu = $this->menu->getMenuQuery(['item_id' => $menu->parent_id])->first();
                        $theMenu->get($parentMenu->permission)
                            ->add($menu->title, $thisItemLink)
                            ->nickname($menu->permission)
                            ->data(['icon_class' => $menu->icon_class, 'menu_link' => $thisItemLink]);
                    }

                    $langLink = $menu->link;
                    if ($request->is($langLink)) {
                        $theMenu->item($menu->permission)->active();
                        $this->activateItem($theMenu, $menu->item_id);
                    }
                }
            }
        });

        return $menu;
    }

    protected  function activateItem(Builder $item, $menuId, $first = true)
    {
        $menu = $this->menu->getMenuQuery(['item_id' => $menuId])->first();

        if (! $first) {
            $item->item($menu->permission)->active();
        }

        if ($menu->parent_id != '' && $menu->parent_id != '0') {
            $this->activateItem($item, $menu->parent_id, false);
        }

    }
}