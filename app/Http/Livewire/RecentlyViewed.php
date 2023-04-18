<?php

namespace App\Http\Livewire;

use Livewire\Component;
use MarcReichel\IGDBLaravel\Models\Game as IGDB;

class RecentlyViewed extends Component
{
    public $recently_view = [];
    public function loadRecentlyView(){
         $this->recently_view = IGDB::select(['*'])->skip(35)->where("cover", "!=", null)->where("summary", "!=", null)->with(['cover'])->limit(5)->get();
    }
    public function render()
    {
        return view('livewire.recently-viewed');
    }
}
