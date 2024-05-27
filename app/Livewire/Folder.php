<?php

namespace App\Livewire;

use App\Models\library;
use Livewire\Component;
use Illuminate\Support\Facades\Request;

class Folder extends Component
{
    public $folders;
    public $lib_id;
    public $folder_id;

    public $selectoptions = [];
    public $selected = [0];

    public function __construct($lib_id = null)
    {
        $this->lib_id =$lib_id;

        $run = auth()->user()->folders()->exists() ? true : false;
        $this->OptionsSelect($run);
    }

    public function OptionsSelect($run = true)
    {
        $selected = [0];
        $lib = library::find($this->lib_id);

        $this->selectoptions += [ 0 =>[
            'folder_name' => "Select Folder",
            'selected' => '']]; 

        if(!$run)  return;
        
        foreach (auth()->user()->folders()->get(['folder_name', 'id']) as $folder) {

            
                $this->selectoptions += [$folder['id']=>[
                    'folder_name' => $folder['id'],
                    'selected' => '']];
        }

        $this-> OptionSelected($this->selected);

    }

    function OptionSelected($arr) {
        $index = array_search( 1 , $arr);
        if(empty($index)) return;

        /* $this->selectoptions[$index]['selected'] = 'selected'; */
    }

    public function InsertOnChange()
    {
        if (empty($this->lib_id)) return;
        $value = empty($this->lib_id) ? null : $this->lib_id;
        library::where('id', $this->lib_id)->update(['folder_id' => $value]);
    }

    public function render()
    {
        return view('livewire.folder');
    }
}
