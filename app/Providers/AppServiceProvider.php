<?php

namespace App\Providers;

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
        //
        
            // view()->composer('admin.header',function($view){
            //     $view->with()
            // }); 
        
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
