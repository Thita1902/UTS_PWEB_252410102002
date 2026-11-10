<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman awal
Route::get('/', function () {
    return redirect()->route('login');
});

// Halaman Login
Route::get('/login', [PageController::class, 'login'])
    ->name('login');

// Proses Login menggunakan GET Request Parameter
Route::get('/login/process', [PageController::class, 'loginProcess'])
    ->name('login.process');

// Dashboard
Route::get('/dashboard', [PageController::class, 'dashboard'])
    ->name('dashboard');

// Pengelolaan Produk
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])
    ->name('pengelolaan');

// Profile
Route::get('/profile', [PageController::class, 'profile'])
    ->name('profile');

// Logout
Route::get('/logout', function () {
    return redirect()->route('login');
})->name('logout');
