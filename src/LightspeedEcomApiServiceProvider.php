<?php

namespace TimothyDC\LightspeedEcomApi;

use Illuminate\Support\ServiceProvider;
use TimothyDC\LightspeedEcomApi\Commands\LightspeedEcomApiCommand;
use TimothyDC\LightspeedEcomApi\Services\LightspeedEcomApi as EcomApi;

class LightspeedEcomApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/lightspeed-ecom-api.php' => config_path('lightspeed-ecom-api.php'),
            ], 'lightspeed-ecom-api:config');

            $this->commands([
                LightspeedEcomApiCommand::class,
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/lightspeed-ecom-api.php', 'lightspeed-ecom-api');

        // load default config
        $this->app->singleton(EcomApi::class, fn ($app) => new EcomApi($app['config']['lightspeed-ecom-api']));

        // register facade
        $this->app->alias(EcomApi::class, 'lightspeed-ecom-api');
    }
}
