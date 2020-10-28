<?php

declare(strict_types=1);

namespace TimothyDC\LightspeedEcomApi\Services;

class WebshopappApiClient extends \WebshopappApiClient
{
    public function create($url, $payload, $options = []): array
    {
        $result = parent::create($url, $payload, $options);

        $this->cacheCalls();

        return $result;
    }

    public function read($url, $params = []): array
    {
        $result = parent::read($url, $params);

        $this->cacheCalls();

        return $result;
    }

    public function update($url, $payload, $options = []): array
    {
        $result = parent::update($url, $payload, $options);

        $this->cacheCalls();

        return $result;
    }

    public function delete($url): array
    {
        $result = parent::delete($url);

        $this->cacheCalls();

        return $result;
    }

    public function getMaxCalls(): int
    {
        [$fiveMinutes] = explode('/', $this->getResponseHeaders()['x-ratelimit-limit'] ?? '300/3000/12000');

        return (int)$fiveMinutes;
    }

    public function getRemainingCalls(): int
    {
        [$fiveMinutes] = explode('/', $this->getResponseHeaders()['x-ratelimit-remaining'] ?? '300/3000/12000');

        return (int)$fiveMinutes;
    }

    public function getResetTime(): int
    {
        [$fiveMinutes] = explode('/', $this->getResponseHeaders()['x-ratelimit-reset'] ?? '300/3000/12000');

        return (int)$fiveMinutes;
    }

    protected function cacheCalls(): void
    {
        if (config('lightspeed-ecom-api.save_remaining_calls_to_cache') === true) {
            cache()->set('ls_ecom_api_' . $this->getApiKey(), $this->getRemainingCalls());
        }
    }
}
