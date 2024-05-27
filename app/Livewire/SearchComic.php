<?php

namespace App\Livewire;

use App\Models\library;
use Livewire\Component;

class SearchComic extends Component
{
    public $search = '';
    public int $showSearches = 0;

    private function comicSearch (){
        $results = [];
        if(strlen($this->search) > 1){
            $results = library::where('name','like','%'.$this->search.'%')
            ->orwhere('tags','like','%'.$this->search.'%')
            ->limit(5)->get();
        }
        return $results;
    }
    public function render(){
        
        return view('livewire.search-comic',[
            'comics' => $this->comicSearch()
        ]);
    }
}
