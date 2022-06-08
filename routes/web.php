<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'show'])->name('home');


Route::middleware(['auth'])->group(function () {
    Route::middleware(['auth.admin'])->group(function () {
        Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    });

    Route::middleware(['auth.user'])->group(function () {
        Route::get('/profile', function () {
            return view('pages.user-profile');
        })->name('profile');

        Route::get('/properties', function () {
            return view('pages.properties');
        })->name('properties');
    });
});


require __DIR__.'/auth.php';

