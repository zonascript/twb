<?php

namespace App\Http\Middleware;

use App\Service\MenuGenerator;
use Closure;
use Illuminate\Support\Facades\View;

class Menu
{
    /**
     * @var MenuGenerator
     */
    private $menuGenerator;

    /**
     * Menu constructor.
     */
    public function __construct(MenuGenerator $menuGenerator)
    {
        $this->menuGenerator = $menuGenerator;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $menu = $this->menuGenerator->generateMenu($request, 1);
        View::share('g_menu', $menu);
        return $next($request);
    }
}
