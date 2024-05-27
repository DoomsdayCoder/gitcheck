<?php

namespace App\Livewire;

use App\Models\Tags;
use Livewire\Component;
use Illuminate\Support\Str;

class NewTag extends Component
{


    public $tag_name = '';
    public $msg = null;

    public function createTag()
    {
        $this->msg = null;
        $formData = $this->validate(['tag_name' => 'required|min:2']);
        $val = Tags::where('tag_name', '=', $formData["tag_name"])->pluck("tag_name");

        if(!empty($val[0])) {
            $this->msg = 'Tag already exists!';
            return; 
        };

        $formData['id'] = Str::uuid()->getHex();
        $formData['user_id'] = auth()->user()->id;

        Tags::create($formData);
        /* dd($formData); */
        $this->msg = 'Success!';
    }
    public function render()
    {
        return view('livewire.new-tag');
    }
}
