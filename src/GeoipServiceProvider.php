<?php

namespace FaridBabayev\Geoip;

use Illuminate\Support\ServiceProvider;

class GeoipServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('geoip', function () {
            return new Geoip;
        });
    }
}
