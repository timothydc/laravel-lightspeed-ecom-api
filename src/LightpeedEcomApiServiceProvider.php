<?php

namespace TimothyDC\LightpeedEcomApi;

use Illuminate\Support\ServiceProvider;
use TimothyDC\LightpeedEcomApi\Commands\LightpeedEcomApiCommand;

class LightpeedEcomApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/laravel-lightspeed-ecom-api.php' => config_path('lightspeed-ecom-api.php'),
            ], 'config');

            $this->commands([
                LightpeedEcomApiCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/lightspeed-ecom-api.php', 'lightspeed-ecom-api');
    }
}
