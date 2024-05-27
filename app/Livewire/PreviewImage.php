<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class PreviewImage extends Component
{
    use WithFileUploads;
    public $image = null;
    private function imageProcessor($image){
        if($image == null || empty($image)){
            return 'local-images/no-image.png';
        }
        if (is_string($image)) {
            return $image;
        }
        return $image->temporaryUrl();
    }
    public function render(){
        return view('livewire.preview-image', [
            'img' => self::imageProcessor($this->image)
        ]);
    }
}
