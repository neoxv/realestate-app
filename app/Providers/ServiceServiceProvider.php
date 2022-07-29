<?php

namespace App\Providers;

use App\Services\UserService;
use App\Services\OwnerService;
use App\Services\ClientService;
use App\Services\SettingService;
use App\Services\DocumentService;
use App\Services\PropertyService;
use App\Services\AdvertisementService;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\UserServiceInterface;
use App\Interfaces\OwnerServiceInterface;
use App\Interfaces\ClientServiceInterface;
use App\Interfaces\SettingServiceInterface;
use App\Interfaces\DocumentServiceInterface;
use App\Interfaces\PropertyServiceInterface;
use App\Interfaces\AdvertisementServiceInterface;

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
        $this->app->bind(ClientServiceInterface::class, ClientService::class);
        $this->app->bind(AdvertisementServiceInterface::class, AdvertisementService::class);
        $this->app->bind(SettingServiceInterface::class, SettingService::class);
        $this->app->bind(DocumentServiceInterface::class, DocumentService::class);
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
