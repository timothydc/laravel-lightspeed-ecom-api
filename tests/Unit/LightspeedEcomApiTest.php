<?php

declare(strict_types=1);

namespace TimothyDC\LightspeedEcomApi\Tests\Unit;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use TimothyDC\LightspeedEcomApi\LightspeedEcomApi;
use TimothyDC\LightspeedEcomApi\Services\WebshopappApiClient;
use TimothyDC\LightspeedEcomApi\Tests\TestCase;
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

    public function test_it_can_get_remaining_api_calls(): void
    {
        $apiKey = 'abcdefghijklmnopqrstuvwxyz012345';
        config()->set('lightspeed-ecom-api.key', $apiKey);

        cache()->set('ls_ecom_api_remaining_' . $apiKey, 123);

        $this->assertEquals(123, LightspeedEcomApi::getRemainingCalls());
        $this->assertEquals(300, LightspeedEcomApi::getRemainingCalls(false));
    }

    public function test_it_can_get_api_calls_reset_time(): void
    {
        $apiKey = 'abcdefghijklmnopqrstuvwxyz012345';
        config()->set('lightspeed-ecom-api.key', $apiKey);

        $resetTime = now()->subSeconds(60);
        cache()->set('ls_ecom_api_reset_' . $apiKey, $resetTime);

        $this->assertEquals($resetTime, LightspeedEcomApi::getResetTime());
        $this->assertEquals(Carbon::now()->addSeconds(300)->format('Y-m-d H:i:s'), LightspeedEcomApi::getResetTime(false)->format('Y-m-d H:i:s'));
    }

}
