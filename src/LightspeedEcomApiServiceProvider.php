<?php

namespace TimothyDC\LightspeedEcomApi;

use Illuminate\Support\ServiceProvider;
use TimothyDC\LightspeedEcomApi\Commands\LightspeedEcomApiCommand;
use TimothyDC\LightspeedEcomApi\Services\LightspeedEcomApi as EcomApi;
use WebshopappApiClient;

class LightspeedEcomApiServiceProvider extends ServiceProvider
{
    public function boot(): void
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

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/lightspeed-ecom-api.php', 'lightspeed-ecom-api');

        // load default config
        $this->app->singleton(
            WebshopappApiClient::class,
            fn ($app) => new WebshopappApiClient(
            $app['config']['lightspeed-ecom-api']['cluster'],
            $app['config']['lightspeed-ecom-api']['key'],
            $app['config']['lightspeed-ecom-api']['secret'],
            $app['config']['lightspeed-ecom-api']['language']
        )
        );

        $this->app->singleton(EcomApi::class, fn ($app) => new EcomApi($app->make(WebshopappApiClient::class)));

        // register facade
        $this->app->alias(EcomApi::class, 'lightspeed-ecom-api');
    }
}
