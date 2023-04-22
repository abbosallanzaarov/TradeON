<?php

namespace App\Providers;

use App\Interfaces\IAddressRepository;
use App\Interfaces\IDriverRepository;
use App\Interfaces\ISellerRepository;
use App\Repositories\AddressRepository;
use App\Repositories\DriverRepository;
use App\Repositories\SellerRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IAddressRepository::class , AddressRepository::class);
        $this->app->bind(IDriverRepository::class , DriverRepository::class);
        $this->app->bind(ISellerRepository::class , SellerRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
