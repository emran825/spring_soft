<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use View;
use App\Header;
use App\Navbar;
use App\Footer;
use App\Detail;

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
        //
          View::composer('*', function($view){
            $view->with('header',Header::latest()->first());
            $view->with('nav',Navbar::latest()->first());
            $view->with('footer',Footer::orderBy('id','desc')->take(3)->get());

            $view->with('our_details',Detail::latest()->first());

        });
    }
}
