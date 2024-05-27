<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteData extends Component
{
    public $confirmation = 'Are you sure you want to delete this data?';

    public function delete($data) {

    }
    public function render()
    {
        return view('livewire.delete-data');
    }
}
