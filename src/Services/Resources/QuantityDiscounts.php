<?php

declare(strict_types=1);

namespace TimothyDC\LightspeedEcomApi\Services\Resources;

use TimothyDC\LightspeedEcomApi\Services\WebshopappApiClient;
use WebshopappApiException;

/**
 * Quantity discounts resource.
 *
 * This resource is not provided by seoshop/seoshop-php, so it is implemented here.
 *
 * A quantity discount holds the following fields:
 * - id            int
 * - createdAt     string
 * - updatedAt     string
 * - product       int    Product ID
 * - variant       int    Variant ID, 0 for all variants
 * - quantity      int
 * - price         float
 * - percentage    float
 * - isPercentage  bool
 * - customerGroup int    Customer group ID, 0 for all groups
 * - startDate     string Y-m-d
 * - endDate       string Y-m-d
 *
 * @see https://developers.lightspeedhq.com/ecom/endpoints/quantitydiscounts/
 */
class QuantityDiscounts
{
    protected WebshopappApiClient $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields): array
    {
        $fields = ['quantityDiscount' => $fields];

        return $this->client->create('quantity_discounts', $fields);
    }

    /**
     * @param int $quantityDiscountId
     * @param array $params limit, page, since_id, created_at_min, created_at_max, updated_at_min, updated_at_max, fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($quantityDiscountId = null, $params = []): array
    {
        if (! $quantityDiscountId) {
            return $this->client->read('quantity_discounts', $params);
        }

        return $this->client->read('quantity_discounts/' . $quantityDiscountId, $params);
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = [])
    {
        return $this->client->read('quantity_discounts/count', $params);
    }

    /**
     * @param int $quantityDiscountId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($quantityDiscountId, $fields): array
    {
        $fields = ['quantityDiscount' => $fields];

        return $this->client->update('quantity_discounts/' . $quantityDiscountId, $fields);
    }

    /**
     * @param int $quantityDiscountId
     *
     * @return array|null
     * @throws WebshopappApiException
     */
    public function delete($quantityDiscountId): ?array
    {
        return $this->client->delete('quantity_discounts/' . $quantityDiscountId);
    }
}
