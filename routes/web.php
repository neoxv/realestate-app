<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'show'])->name('home');
Route::get('/property-list', function () {
    return view('pages.property-list');
})->name('search');

Route::get('/property-detail', function () {
    return view('pages.property-detail');
})->name('detail');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::middleware(['auth'])->group(function () {
    Route::middleware(['auth.admin'])->group(function () {

        Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
        Route::get('/properties',[DashboardController::class,'propertyIndex'])->name('admin.properties');
        Route::get('/users',[DashboardController::class,'userIndex'])->name('admin.users');
        Route::get('/advertisements',[DashboardController::class,'advertisementIndex'])->name('admin.advertisements');
        Route::get('/settings', [DashboardController::class, 'settingIndex'])->name('admin.settings');

        Route::post('/property/create',[PropertyController::class, 'create'])->name('property.create');
        Route::post('/owner/create', [OwnerController::class, 'create'])->name('owner.create');
        Route::post('/client/create', [ClientController::class, 'create'])->name('client.create');
        Route::post('/advertisements/create', [AdvertisementController::class, 'create'])->name('advertisement.create');
        Route::post('/settings/create', [SettingController::class, 'create'])->name('setting.create');

        Route::post('/property/update', [PropertyController::class, 'update'])->name('property.update');

    });

    Route::middleware(['auth.user'])->group(function () {
        Route::get('/profile', function () {
            return view('pages.user-profile');
        })->name('profile');

        Route::get('/favourites', function () {
            return view('pages.favourites');
        })->name('favourites');

    });

    Route::post('/store-document', [DocumentController::class,'store'])->name('store.document');
    Route::post('/property/search',[PropertyController::class, 'search'])->name('property.search');


});


require __DIR__.'/auth.php';

