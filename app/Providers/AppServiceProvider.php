<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Carbon as SupportCarbon;
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
        //
        SupportCarbon::macro('parseOrFalse', function($string){

            return rescue(fn()=>Carbon::parse($string), false, false)?:
            rescue(fn()=>Carbon::createFormat('d/m/y'),false, false);

        });
    }
}
