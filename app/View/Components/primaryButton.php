<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class primaryButton extends Component
{
    public $href;
    public $label;
    public $labelClass;
    public function __construct($label,$href='/home',$labelClass='')
    {
        $this->href = $href;
        $this->label = $label;
        $this->labelClass = $labelClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.primary-button');
    }
}
