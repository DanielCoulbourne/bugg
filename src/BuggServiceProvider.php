<?php

namespace Thunk\Bugg;

use Illuminate\Support\ServiceProvider;

class BuggServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // if ($this->app->runningInConsole()) {
        //     $this->publishes([
        //         __DIR__.'/../config/config.php' => config_path('bugg.php'),
        //     ], 'config');
        // }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'bugg');
    }
}
