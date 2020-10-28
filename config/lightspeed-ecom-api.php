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
    'cluster' => env('LS_ECOM_API_CLUSTER', 'live'),

    /*
     * Enter your Lightspeed API key and secret. You can request a set of credentials via the Lightspeed support service.
     */
    'key' => env('LS_ECOM_API_KEY'),
    'secret' => env('LS_ECOM_API_SECRET'),

    /*
     * Enter your default shop language.
     * Possible options can be found via the "settings/internationalization" menu in your webshop backoffice.
     */
    'language' => env('LS_ECOM_API_LANGUAGE', 'en'),

    /*
     * Set this to false when you don't want to cache your remaining API calls in the local cache driver.
     */
    'save_remaining_calls_to_cache' => env('LS_ECOM_API_SAVE_CALLS_TO_CACHE', true),
];
