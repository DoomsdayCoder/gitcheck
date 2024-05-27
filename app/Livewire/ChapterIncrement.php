<?php

namespace App\Livewire;

use App\Models\library;
use Livewire\Component;

class ChapterIncrement extends Component
{
    public $row;
    public $chapter;
    public $confirmation = 'Are you sure you want to Delete this manga?';

    public function delete(){
        return redirect('/deleteComic/'.$this->row->id);
    }
    public function chpChanges() {
        library::where('id', $this->row->id)->update(['bookmark' => $this->chapter]);
        return;
    }

    public function render(){
        return view('livewire.chapter-increment',[
            'datetime' => $this->row->updated_at
        ]);
    }
}
