<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.welcome');
})->name('home');


Route::middleware(['auth'])->group(function () {
    Route::middleware(['auth.admin'])->group(function () {
        Route::get('/dashboard', function () {
            return view('pages.dashboard');
        })->name('dashboard');
    });

    Route::middleware(['auth.user'])->group(function () {
        Route::get('/profile', function () {
            return view('pages.user-profile');
        })->name('profile');
    });
});


require __DIR__.'/auth.php';

