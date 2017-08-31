<?php

namespace App\Providers;

use App;
use Illuminate\Support\ServiceProvider;
use App\Contracts\BaseRepositoryInterface;
use App\Contracts\ProductRepositoryInterface;
use App\Contracts\OrderRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Repositories\ProductRepository;
use App\Repositories\OrderRepository;

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
    }
}
