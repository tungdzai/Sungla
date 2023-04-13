<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Customers\CustomerRepositoryInterface;
use App\Repositories\Customers\CustomerRepository;
use App\Repositories\Products\ProductRepositoryInterface;
use App\Repositories\Products\ProductRepository;
use App\Repositories\Carts\CartRepositoryInterface;
use App\Repositories\Carts\CartRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CustomerRepositoryInterface::class,CustomerRepository::class);
        $this->app->singleton(ProductRepositoryInterface::class,ProductRepository::class);
        $this->app->singleton(CartRepositoryInterface::class,CartRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
