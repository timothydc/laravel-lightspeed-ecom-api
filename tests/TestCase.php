<?php

declare(strict_types=1);

namespace TimothyDC\LightspeedEcomApi\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use TimothyDC\LightspeedEcomApi\LightspeedEcomApiServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LightspeedEcomApiServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }
}
