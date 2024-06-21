<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardTile extends Component
{
    /**
     * Create a new component instance.
     */
    public $cssClass;
    public $text;
    public $routeDirection;
    public $icon;
    public $isIconNeeded ;
    public $innerRouteDirection;
    public function __construct($cssClass, $text, $routeDirection,$icon , $innerRouteDirection = "" ,  $isIconNeeded = false)
    {
        $this->cssClass = $cssClass;
        $this->text = $text;
        $this->routeDirection = $routeDirection;
        $this->icon = $icon;
        $this->isIconNeeded = $isIconNeeded;
        $this->innerRouteDirection = $innerRouteDirection;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-tile');
    }
}
