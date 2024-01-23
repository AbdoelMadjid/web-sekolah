<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Panel extends Component
{
    /**
     * Create a new component instance.
     */
    public $id_panel;
    public $icon;
    public $judulutama;
    public $judulspan;
    public $paneltoolbar;
    public $panelcontentbar;
    public $panelcontentfoot;

    public function __construct(
        $id_panel = "",
        $icon = "",
        $judulutama = "",
        $judulspan = "",
        $paneltoolbar = "",
        $panelcontentbar = "",
        $panelcontentfoot = ""
    ) {
        $this->id_panel = $id_panel;
        $this->icon = $icon;
        $this->judulutama = $judulutama;
        $this->judulspan = $judulspan;
        $this->paneltoolbar = $paneltoolbar;
        $this->panelcontentbar = $panelcontentbar;
        $this->panelcontentfoot = $panelcontentfoot;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.panel');
    }
}
