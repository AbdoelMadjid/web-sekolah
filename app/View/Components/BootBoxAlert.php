<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BootBoxAlert extends Component
{
    /**
     * Create a new component instance.
     */
    public $typebutton;
    public $id;
    public $datatitle;
    public $datamessage;
    public $url;
    public $icon;

    public function __construct($typebutton = "", $id = "", $datatitle = "", $datamessage = "", $url = "", $icon = "")
    {
        $this->typebutton = $typebutton;
        $this->id = $id;
        $this->datatitle = $datatitle;
        $this->datamessage = $datamessage;
        $this->url = $url;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bootboxalert');
    }
}
