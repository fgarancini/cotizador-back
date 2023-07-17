<?php

namespace App\Providers;

use App\Interfaces\ProductsServiceInterface;
use App\Services\ProductsService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ProductsServiceInterface::class, ProductsService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
