<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('game/sport-bet', function () {
    return view('sport-bet');
})->name('sport-bet');

// Route::get('/', function() {
//     return view('hai');
// });