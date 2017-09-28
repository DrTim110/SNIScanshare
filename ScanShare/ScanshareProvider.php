<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ScanShareProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__.'/Routes/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
        // $this->loadViewsFrom(__DIR__.'/Views', 'scanshare');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
