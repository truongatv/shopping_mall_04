<?php

namespace App\Providers;

use App;
use Illuminate\Support\ServiceProvider;
use App\Contracts\BaseRepositoryInterface;
use App\Contracts\ProductRepositoryInterface;
use App\Contracts\OrderRepositoryInterface;
use App\Contracts\CheckoutRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Repositories\ProductRepository;
use App\Repositories\OrderRepository;
use App\Repositories\checkoutRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind(ProductRepositoryInterface::class, ProductRepository::class);
        App::bind(OrderRepositoryInterface::class, OrderRepository::class);
        App::bind(CheckoutRepositoryInterface::class, CheckoutRepository::class);

    }
}
