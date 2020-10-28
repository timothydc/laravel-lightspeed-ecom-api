<?php

return [
    /*
     * Enter your cluster. You can choose from;
     * - live
     * - eu1
     * - us1
     * - local
     * "live" and "eu1" point to the same cluster. If you don't work for Lightspeed you probably won't need "local".
     * For more information check https://developers.lightspeedhq.com/ecom/introduction/clusters/
     */
    'cluster' => 'live',

    /*
     * Enter your Lightspeed API key and secret. You can request a set of credentials via the Lightspeed support service.
     */
    'key' => '',
    'secret' => '',

    /*
     * Enter your default shop language.
     * Possible options can be found via the "settings/internationalization" menu in your webshop backoffice.
     */
    'language' => 'en',

    'save_remaining_calls_to_cache' => env('LS_ECOM_API_SAVE_CALLS_TO_CACHE', true)
];
