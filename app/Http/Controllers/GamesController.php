<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use MarcReichel\IGDBLaravel\Models\Game as IGDB;
use MarcReichel\IGDBLaravel\Models\Search;

class GamesController extends Controller
{
    public function index(){
        // $igdb = IGDB::SELECT("name","first_release_date", "platforms.abbrevation", "rating")->with(['cover', 'screenshots'])->limit(10)->get();
        $igdb = IGDB::select(['*'])->skip(5)->where("cover", "!=", null)->where("rating", "!=", null)->with(['cover'])->limit(15)->get();
        $recently_view = IGDB::select(['*'])->skip(35)->where("cover", "!=", null)->where("summary", "!=", null)->with(['cover'])->limit(5)->get();
        // dd($recently_view);
        return view("index");
    }
    public function show($slug){
        $searched_game = IGDB::select(['*'])->where("cover", "!=", null)->where("rating", "!=", null)->where("slug", "=", $slug)->with(['screenshots','cover', 'genres', 'involved_companies.company',])->limit(15)->get();
        // dd($searched_game);
        abort_if(!$searched_game, 404);
        return view("show", compact('searched_game'));
    }
}
