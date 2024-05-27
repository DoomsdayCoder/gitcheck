<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class previewImage extends Component
{
    public $id;
    /**
     * Create a new component instance.
     */
    public function __construct($id='')
    {
        //
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.preview-image');
    }
}
