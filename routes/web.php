<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;

Route::get('/', fn () => redirect()->route('dashboard'));

Route::get('/login', [BackController::class, 'login'])->name('login');
Route::get('/register', [BackController::class, 'register'])->name('register');
Route::post('/login/post-login', [BackController::class, 'postlogin'])->name('post-login');
Route::post('/register/post-register', [BackController::class, 'postregister'])->name('post-register');
Route::post('/logout', [BackController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [BackController::class, 'index'])->name('dashboard');
});
