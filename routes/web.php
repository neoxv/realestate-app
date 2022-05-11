<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::middleware(['auth'])->group(function () {

    Route::middleware(['auth.admin'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

    Route::middleware(['auth.user'])->group(function () {
                Route::get('/home', function () {
                    return view('home');
                })->name('home');
    });
});


require __DIR__.'/auth.php';

