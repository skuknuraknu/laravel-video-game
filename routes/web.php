<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
Route::get("/", [GamesController::class,'index'])->name("games.index");
Route::get("/show/{slug}", [GamesController::class,'show'])->name("games.show");