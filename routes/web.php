<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;

Route::get('/', fn () => redirect()->route('dashboard'));

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [BackController::class, 'index'])->name('dashboard');
});
