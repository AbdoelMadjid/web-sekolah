<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public $icon;
    public $title;

    public function __construct($type = "", $icon = "", $title = "")
    {
        $this->type = $type;
        $this->title = $title;

        switch ($type) {
            case 'warning':
                $this->icon = 'fal fa-exclamation-circle';
                break;
            case 'danger':
                $this->icon = 'fal fa-times-circle';
                break;
            case 'info':
                $this->icon = 'fal fa-info-circle';
                break;
            case 'success':
                $this->icon = 'fal fa-check-circle';
                break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
