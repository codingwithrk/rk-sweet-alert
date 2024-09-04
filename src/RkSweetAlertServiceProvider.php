<?php

/**
 * @author : CodingwithRK
 */

namespace Codingwithrk\RkSweetAlert;

use Codingwithrk\RkSweetAlert\View\Components\RkSweetAlert;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class RkSweetAlertServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/rk-sweet-alert.php' => config_path('rk-sweet-alert.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'rk-sweet-alert');

        Blade::component('rk-sweet-alert', RkSweetAlert::class);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Merge the configuration file
        $this->mergeConfigFrom(
            __DIR__ . '/../config/rk-sweet-alert.php', 'rk-sweet-alert'
        );
    }
}