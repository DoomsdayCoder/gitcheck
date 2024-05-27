<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Facades\URL;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class authForm extends Component
{
    public $title;
    public $defined;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $t = $this->checksUrl();
        $this->title = $t;
        $this->defined = $this->getarr($t);
    }

    private static function checksUrl() {
        $url = basename(URL::current());
        if($url == 'login' || $url =='signup') {
            return $url;
        }
        else {
            return null;
        }
    }

    private static function getarr($formType){
        if($formType == null) return abort(404);
        $collection = [
            'signup'=>[
                'action' => '/register',
                'href' => 'login',
                'show' => 'Already have an account?',
                'lgpg' => false
            ],
            'login'=>[
                'action' => '/authenticate',
                'href' => 'signup',
                'show' => 'Create new account?',
                'lgpg' => true
            ]
        ];

        return $collection[$formType];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.auth-form');
    }
}
