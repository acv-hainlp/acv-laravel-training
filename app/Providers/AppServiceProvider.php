<?php

namespace App\Providers;

use \App\Post;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Create sidebar for layouts.sidebar with composer

        view()->composer('layouts.sidebar',function($view){ // return $view result to layouts.sidebar
            $view->with('archives', Post::archives()); //return Post::archives to $view with name: archives
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
