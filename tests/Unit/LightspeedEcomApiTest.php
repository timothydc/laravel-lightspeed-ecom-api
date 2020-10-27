<?php

declare(strict_types=1);

namespace TimothyDC\LightspeedEcomApi\Tests\Unit;

use Illuminate\Support\Facades\App;
use TimothyDC\LightspeedEcomApi\LightspeedEcomApi;
use TimothyDC\LightspeedEcomApi\Tests\TestCase;
use WebshopappApiClient;
use WebshopappApiException;
use WebshopappApiResourceAccount;

class LightspeedEcomApiTest extends TestCase
{
    public function test_it_requires_credentials(): void
    {
        $this->expectException(WebshopappApiException::class);
        $this->expectExceptionMessage('Invalid login credentials.');

        LightspeedEcomApi::shouldReceive('account')
            ->andReturns(new WebshopappApiResourceAccount(App::make(WebshopappApiClient::class)))
            ->once();

        LightspeedEcomApi::account()->get();
    }

    public function test_it_requires_language(): void
    {
        config()->set('lightspeed-ecom-api.key', 'abcdefghijklmnopqrstuvwxyz012345');
        config()->set('lightspeed-ecom-api.secret', 'abcdefghijklmnopqrstuvwxyz012345');
        config()->set('lightspeed-ecom-api.language', '');

        $this->expectException(WebshopappApiException::class);
        $this->expectExceptionMessage('Invalid API language.');

        LightspeedEcomApi::shouldReceive('account')
            ->andReturns(new WebshopappApiResourceAccount(App::make(WebshopappApiClient::class)))
            ->once();

        LightspeedEcomApi::account()->get();
    }

    public function test_it_fails_on_invalid_credentials(): void
    {
        config()->set('lightspeed-ecom-api.key', 'abcdefghijklmnopqrstuvwxyz012345');
        config()->set('lightspeed-ecom-api.secret', 'abcdefghijklmnopqrstuvwxyz012345');
        config()->set('lightspeed-ecom-api.language', 'en');

        $this->expectException(WebshopappApiException::class);
        $this->expectExceptionMessage('Could not authenticate you.');

        LightspeedEcomApi::shouldReceive('account')
            ->andReturns(new WebshopappApiResourceAccount(App::make(WebshopappApiClient::class)))
            ->once();

        LightspeedEcomApi::account()->get();
    }

    public function test_it_can_call_api_and_return_response_class(): void
    {
        $this->partialMock(WebshopappApiClient::class, static function ($mock) {
            $mock->shouldReceive('read')->times(2);
        });

        LightspeedEcomApi::shouldReceive('account')
            ->andReturns(new WebshopappApiResourceAccount(App::make(WebshopappApiClient::class)))
            ->once();
        LightspeedEcomApi::account()->get();

        LightspeedEcomApi::shouldReceive('shop')
            ->andReturns(new \WebshopappApiResourceShop(App::make(WebshopappApiClient::class)))
            ->once();
        LightspeedEcomApi::shop()->get();
    }
}
