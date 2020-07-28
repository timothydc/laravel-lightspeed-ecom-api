<?php

declare(strict_types=1);

namespace TimothyDC\LightspeedEcomApi\Tests\Feature\Commands;

use TimothyDC\LightspeedEcomApi\LightspeedEcomApi;
use TimothyDC\LightspeedEcomApi\Tests\TestCase;

class LightspeedEcomApiCommandTest extends TestCase
{
    public function test_it_can_call_lightspeed_api(): void
    {
        LightspeedEcomApi::shouldReceive('shop')->once();

        $this->artisan('ecom-api:test')
            ->assertExitCode(0);
    }
}
