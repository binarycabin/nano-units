<?php

namespace BinaryCabin\NanoUnits\Providers;

use Illuminate\Support\ServiceProvider;
use BinaryCabin\NanoUnits\NanoUnits;

class NanoUnitsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerNanoUnits();
    }

    public function registerNanoUnits(){
        $this->app->bind('nanounits',function() {
            return new NanoUnits();
        });
    }

    public function provides()
    {
        return array('nanounits', NanoUnits::class);
    }
    

}