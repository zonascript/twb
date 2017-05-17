<?php

namespace App\Http\Middleware;

use App\Service\MenuGenerator;
use Closure;

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
        $this->menuGenerator->generateMenu($request, 1);
        return $next($request);
    }
}
