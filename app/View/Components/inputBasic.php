<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class inputBasic extends Component
{
    public $type;
    public $name;
    public $label;
    public $placeholder;
    public $value;
    /**
     * Create a new component instance.
     */
    public function __construct($name,$label='', $placeholder ='', $type= 'text',$value = '')
    {
        //
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = (!empty($placeholder)) ? $placeholder : $name;
        $this->value = $value;   
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-basic');
    }
}
