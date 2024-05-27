<?php

namespace App\Livewire;

use Livewire\Component;

class SelectTags extends Component
{
    public function render()
    {
        return view('livewire.select-tags',[
            'tags' => auth()->user()->tags()->orderBy('tag_name', 'ASC')->get()
        ]);
    }
}
