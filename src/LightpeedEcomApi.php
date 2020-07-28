<?php

namespace TimothyDC\LightpeedEcomApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TimothyDC\LightpeedEcomApi\LightpeedEcomApi
 */
class LightpeedEcomApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lightspeed-ecom-api';
    }
}
