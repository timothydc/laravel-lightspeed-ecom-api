<?php

namespace TimothyDC\LightpeedEcomApi\Commands;

use Illuminate\Console\Command;

class LightpeedEcomApiCommand extends Command
{
    public $signature = 'ecom-api:test';

    public $description = 'Test Lightspeed eCom API';

    public function handle(): int
    {
        $this->comment('All done');

        return 0;
    }
}
