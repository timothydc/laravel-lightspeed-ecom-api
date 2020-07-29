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
        $this->info(json_encode(LightspeedEcomApi::account()->get()));

        return 0;
    }
}
