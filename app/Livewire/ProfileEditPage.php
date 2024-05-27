<?php

namespace App\Livewire;

use Livewire\Component;



class ProfileEditPage extends Component
{
    public $show=false;
    public $sds=true;

    public function ShowDefaultSelection() {
        $this->sds = !$this->sds;
    }
    public function CloseDefaultSelection() {
        $this->sds = false;
    }

    public function edit() {
        $this->show = !$this->show;
    }

    public function render(){
        return view('livewire.profile-edit-page');
    }
}
