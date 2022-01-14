<?php

namespace PlayMobile\SMS;

use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/config/config.php' => config_path('playmobile.php')
            ], 'playmobile-config');
            $this->publishes([
                __DIR__.'/Http/Controllers/PlaymobileSMSController.php' => app_path('Http/Controllers/PlaymobileSMSController.php'),
            ], 'playmobile');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'playmobile');

        // Register the main class to use with the facade
        $this->app->singleton('playmobile', function () {
            return new SmsService;
        });
    }
}