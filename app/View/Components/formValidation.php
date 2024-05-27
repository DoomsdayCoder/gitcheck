<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class formValidation extends Component
{
    public $action;
    public $method;
    public $enctype;
    /**
     * Create a new component instance.
     */
    public function __construct($action,$method='post',$enctype='application/x-www-form-urlencoded')
    {
        //initialize the class variables
        $this->action = $action;
        $this->method = $method;
        $this->enctype = $enctype;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-validation');
    }
}
