<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'show'])->name('home');


Route::middleware(['auth'])->group(function () {
    Route::middleware(['auth.admin'])->group(function () {
        Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
        Route::get('/properties',[DashboardController::class,'propertyIndex'])->name('admin.properties');
        Route::get('/users',[DashboardController::class,'userIndex'])->name('admin.users');
        Route::get('/advertisements',[DashboardController::class,'advertisementIndex'])->name('admin.advertisements');
        Route::get('/settings', [DashboardController::class, 'settingIndex'])->name('admin.settings');
    });

    Route::middleware(['auth.user'])->group(function () {
        Route::get('/profile', function () {
            return view('pages.user-profile');
        })->name('profile');

        Route::get('/property-list', function () {
            return view('pages.properties');
        })->name('properties');
    });
});


require __DIR__.'/auth.php';

