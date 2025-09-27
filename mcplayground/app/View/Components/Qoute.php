<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Qoute extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(private $data)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.qoute', ['data' => $this->data]);
    }
}
