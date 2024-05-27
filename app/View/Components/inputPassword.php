<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class inputPassword extends Component
{
    public $name;
    public $label;
    public $placeholder;
    public $loginpage;
    /**
     * Create a new component instance.
     */
    public function __construct($name='password', $label='Password', $placeholder ='Password' , $loginpage = false)
    {
        //
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->loginpage = $loginpage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-password');
    }
}
