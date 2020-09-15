<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Nav;
use App\sideNav;
use App\Product;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $navContent = Nav::all();
        view()->share('navContent', $navContent);
        $sideNavContent = sideNav::all();
        view()->share('sideNavContent', $sideNavContent);
        $product = Product::all();
        view()->share('product', $product);
    }
}
