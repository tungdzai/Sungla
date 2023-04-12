<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Customers\CustomerRepositoryInterface;
use App\Repositories\Customers\CustomerRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CustomerRepositoryInterface::class,CustomerRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
