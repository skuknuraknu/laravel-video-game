<?php

namespace App\Http\Livewire;

use Livewire\Component;
use MarcReichel\IGDBLaravel\Models\Game as IGDB;
use Illuminate\Support\Facades\Cache;

class PopularGames extends Component
{
    public $igdb = [];
    public function loadIgdbListGame(){
        $this->igdb = Cache::remember('igdb-lists', 7, function(){
            sleep(3);
            return IGDB::select(['*'])->skip(5)->where("cover", "!=", null)->where("rating", "!=", null)->with(['cover'])->limit(15)->get();
        });
    }
    public function render()
    {
        return view('livewire.popular-games');
    }
}
