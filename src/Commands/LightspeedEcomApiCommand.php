<?php

namespace TimothyDC\LightspeedEcomApi\Commands;

use Illuminate\Console\Command;
use TimothyDC\LightspeedEcomApi\LightspeedEcomApi;

class LightspeedEcomApiCommand extends Command
{
    public $signature = 'ecom-api:test';

    public $description = 'Test Lightspeed eCom API';

    public function handle(): int
    {
        LightspeedEcomApi::setCredentials('2dfdbd753000ddc53b8722e3dafde6a8', 'c7e24ca6e496bb477bb5f29710d1c4d1');
        LightspeedEcomApi::setLanguage('nl');

        (LightspeedEcomApi::shopCompany()->get());
        (LightspeedEcomApi::shopCompany()->get());
        (LightspeedEcomApi::shopCompany()->get());
        (LightspeedEcomApi::shopCompany()->get());
        dump(LightspeedEcomApi::getMaxCalls());
        dump(LightspeedEcomApi::getRemainingCalls());
        dump(LightspeedEcomApi::getResetTime());
        dump(LightspeedEcomApi::getCallsMade());
        return 0;
    }
}
