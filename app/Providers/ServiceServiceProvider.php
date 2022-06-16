<?php

namespace App\Providers;

use App\Interfaces\OwnerServiceInterface;
use App\Services\UserService;
use App\Services\PropertyService;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\UserServiceInterface;
use App\Interfaces\PropertyServiceInterface;
use App\Services\OwnerService;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PropertyServiceInterface::class, PropertyService::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(OwnerServiceInterface::class, OwnerService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
