<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\File;

class ProfileImageForm extends Component
{
    public $fls = array();
    public $profile;
    private function filesSys() {
        if(!empty($this->fls)) return;
        $filesInFolder = File::files('profile-images');     
        foreach($filesInFolder as $path) { 
            $file = pathinfo($path);
            $this->fls[$file['filename']] = $file['basename'] ;
        } 

    }
    public function SubmitCategory() {
        if($this->validate(['profile'=>'required'])){
            /* dd($this->profile); */
        }
       
    }
    public function render()
    {
        self::filesSys();
        return view('livewire.profile-image-form');
    }
}
