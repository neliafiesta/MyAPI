<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\CurrencyConverterController;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/species', [PokemonController::class, 'index']);
Route::post('/pokemon', [PokemonController::class, 'getPokemon']);
Route::get('/search-again', [PokemonController::class, 'index'])->name('search');

