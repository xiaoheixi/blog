<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Nav;
use App\sideNav;
use App\Product;
use App\contactDetails;
use App\services;
use App\news;



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
        $contactDetail = contactDetails::all();
        view()->share('contactDetail', $contactDetail);
        $serviceContent = services::all();
        view()->share('serviceContent', $serviceContent);
        $newsContent = news::all();
        view()->share('newsContent', $newsContent);
    }
}