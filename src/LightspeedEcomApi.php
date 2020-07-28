<?php

namespace TimothyDC\LightspeedEcomApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TimothyDC\LightspeedEcomApi\Services\LightspeedEcomApi
 */
class LightspeedEcomApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'lightspeed-ecom-api';
    }
}
