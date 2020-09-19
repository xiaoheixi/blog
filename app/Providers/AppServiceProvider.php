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
use App\footer;
use App\carousel;
use App\User;
use App\radioShow;
use App\transactions;

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
        $footerContent = footer::all();
        view()->share('footerContent', $footerContent);
        $carouselContent = carousel::all();
        view()->share('carouselContent', $carouselContent);
        $audios = Product::all()->where('productType', 'Audio');
        view()->share('audios', $audios);
        $books = Product::all()->where('productType', 'Book');
        view()->share('books', $books);
        $videos = Product::all()->where('productType', 'Video');
        view()->share('videos', $videos);
        $adminContent = User::all();
        view()->share('adminContent, $adminContent');
        $radioContent = radioShow::all();
        view()->share('radioContent', $radioContent);
        $transactionContent = transactions::all();
        view()->share('transactionContent', $transactionContent);
    }
}