<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public $modalId;
    public $modalSize;
    public $modalTitle;
    public $modalSubTitle;
    public $modalAction;
    /**
     * Create a new component instance.
     */
    public function __construct($modalId, $modalSize, $modalTitle, $modalSubTitle, $modalAction)
    {
        $this->modalId = $modalId;
        $this->modalSize = $modalSize;
        $this->modalTitle = $modalTitle;
        $this->modalSubTitle = $modalSubTitle;
        $this->modalAction = $modalAction;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}
