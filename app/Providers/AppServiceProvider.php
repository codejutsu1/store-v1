<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::directive('money', function($amount){
            return "<?php
                echo '&#8358;' . number_format($amount, 2) ;
            ?>";
        });

        Blade::directive('product_price', function($amount){
            return "<?php
                echo number_format($amount, 2) ;
            ?>";
        });
    }
}
