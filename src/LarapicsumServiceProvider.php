<?php

namespace Sim1dev\Larapicsum;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

class LarapicsumServiceProvider extends ServiceProvider
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
        $this->app->singleton(Larapicsum::class, function () {
            return new Larapicsum();
        });
    }
}