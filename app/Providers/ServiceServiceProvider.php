<?php

namespace App\Providers;

use App\Services\PropertyService;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\PropertyServiceInterface;

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
