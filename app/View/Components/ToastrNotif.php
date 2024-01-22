<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ToastrNotif extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public $judul;
    public $message;

    public function __construct($type = "", $judul = "", $message = "")
    {
        $this->type = $type;
        switch ($type) {
            case 'warning':
                $this->judul = 'Ada Masalah!';
                break;
            case 'danger':
                $this->judul = 'Peringatan!';
                break;
            case 'info':
                $this->judul = 'Informasi!';
                break;
            case 'success':
                $this->judul = 'Sukses!';
                break;
        }
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.toastr-notif');
    }
}
