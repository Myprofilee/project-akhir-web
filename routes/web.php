<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('home', function () {
    return view('home');
})->name('home');

<<<<<<< HEAD
Route::get('game/sport-bet', function() {
    return view('game.sport-bet');
})->name('sport-bet');


=======
>>>>>>> 7a867ebb5eb7ae55bb69d0059457f493017a69f5
// Route::get('/', function() {
//     return view('hai');
// });