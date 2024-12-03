<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;

// Halaman Register
Route::get('register', function () {
    return view('register');
})->name('register');

// Proses Register
Route::post('register', [RegistrationController::class, 'store'])->name('register.store');

Route::get('/', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
})->name('register');

// Route for login form
Route::get('login', [HomeController::class, 'showLoginForm'])->name('login');

// Route to handle login
Route::post('login', [HomeController::class, 'login'])->name('login.submit');

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('hubungikami', function () {
    return view('formaduan');
})->name('hubungikami');

Route::get('game/sport-bet', function () {
    return view('game/sport-bet');
})->name('sport-bet');

Route::get('game/sport-bet/{id}', function ($id) {
    return view('game.sport-bet-detail', compact('id'));
})->name('sport-bet-detail');


Route::get('promo', function () {
    return view('promo');
})->name('promo');

Route::get('game/gambling', function () {
    return view('game/gambling');
})->name('gambling');

Route::get('game/slot', function () {
    return view('game/slot');
})->name('slot');

Route::get('game/gamedarurat', function () {
    return view('game/gamedarurat');
})->name('roulette');

Route::get('game/spinner', function () {
    return view('game/spinner');
})->name('spinner');

Route::get('berita', function () {
    return view('berita');
})->name('berita');

Route::get('tentangkami', function () {
    return view('tentangkami');
})->name('tentangkami');

Route::get('tariktunai', function () {
    return view('tariktunai');
})->name('tariktunai');

// Route::get('/', function() {
//     return view('hai');
// });