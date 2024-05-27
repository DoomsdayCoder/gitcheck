<?php

namespace App\Livewire;

use Livewire\Component;

class DropDown extends Component
{
    public $image;
    public $showdropdown = 0;

    private function profilePicture(){
        $img = 'profile-images/default-profile.jpg';
        if (!empty(auth()->user()->profile)) {
            $this->image = auth()->user()->profile;;
        }
        return $img;
    }
    public function render(){
        $this->image = $this->profilePicture();
        return view('livewire.drop-down');
    }
}
