<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Models\Property;
use Illuminate\Support\Facades\Route;

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

        Route::post('/property/delete/{property}', [PropertyController::class, 'destroy'])->name('property.delete');
        Route::post('/owner/delete/{owner}', [OwnerController::class, 'destroy'])->name('owner.delete');
        Route::post('/advertisement/delete/{advertisement}', [AdvertisementController::class, 'destroy'])->name('advertisement.delete');
        Route::post('/client/delete/{client}', [ClientController::class,'destroy'])->name('client.delete');

        Route::post('/property/update', [PropertyController::class, 'update'])->name('property.update');
        Route::post('/owner/update', [OwnerController::class, 'update'])->name('owner.update');
        Route::post('/user/update', [UserController::class, 'update'])->name('user.update');
        Route::post('/advertisement/update', [AdvertisementController::class, 'update'])->name('advertisement.update');
        Route::post('/client/update', [ClientController::class, 'update'])->name('client.update');

        Route::post('/property/search', [PropertyController::class, 'search'])->name('property.search');
        Route::post('/property/favourite/search', [PropertyController::class, 'searchFavourite'])->name('property.favourite.search');
        Route::post('/property/featured/search', [PropertyController::class, 'searchFeatured'])->name('property.featured.search');
        Route::post('/owner/search', [OwnerController::class, 'search'])->name('owner.search');
        Route::post('/user/search', [UserController::class, 'search'])->name('user.search');
        Route::post('/client/search', [ClientController::class, 'search'])->name('client.search');
        Route::post('/advertisement/search', [AdvertisementController::class, 'search'])->name('advertisement.search');
        Route::get('/test',[PropertyController::class,'test'])->name('test');

    });

    Route::middleware(['auth.user'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profile', [ProfileController::class,'store']);
        Route::get('/profile/password', [ProfileController::class, 'edit'])->name('profile.password');
        Route::post('/profile/password', [ProfileController::class, 'updatePassword']);
        Route::get('/property/favourite/{user}', [PropertyController::class, 'getFavourites'])->name('favourites');
        Route::post('/property/favourite', [PropertyController::class, 'favourite'])->name('favourite');
// must have a morphmany relationship between properties and users

    });

    Route::post('/store-document', [DocumentController::class,'store'])->name('store.document');

});

Route::post('/property/filter', [PropertyController::class, 'filter'])->name('user.property.filter');
Route::post('/property/list', [PropertyController::class, 'userSearch'])->name('user.property.search');
Route::get('/property', [PropertyController::class,'show'])->name('user.property.list');
Route::get('/property/detail/{property}',[PropertyController::class,'getById'])->name('detail');


Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/', [HomeController::class, 'show'])->name('home');

require __DIR__.'/auth.php';

