<?php

namespace Appconstruct\Baseapp;

use Illuminate\Support\ServiceProvider;

class BaseappServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'baseapp');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'baseapp');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('baseapp.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/baseapp'),
            ], 'views');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/main_layouts' => resource_path('views'),
            ], 'layouts');

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/baseapp'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/baseapp'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'baseapp');

        // Register the main class to use with the facade
        $this->app->singleton('baseapp', function () {
            return new Baseapp;
        });
    }
}
