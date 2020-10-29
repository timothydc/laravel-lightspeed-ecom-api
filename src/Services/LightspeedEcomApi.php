<?php

namespace TimothyDC\LightspeedEcomApi\Services;

use Illuminate\Support\Carbon;

use WebshopappApiResourceAccount;
use WebshopappApiResourceAccountMetafields;
use WebshopappApiResourceAccountPermissions;
use WebshopappApiResourceAccountRatelimit;
use WebshopappApiResourceAdditionalcosts;
use WebshopappApiResourceAttributes;
use WebshopappApiResourceBlogs;
use WebshopappApiResourceBlogsArticles;
use WebshopappApiResourceBlogsArticlesImage;
use WebshopappApiResourceBlogsArticlesTags;
use WebshopappApiResourceBlogsComments;
use WebshopappApiResourceBlogsTags;
use WebshopappApiResourceBrands;
use WebshopappApiResourceBrandsImage;
use WebshopappApiResourceCatalog;
use WebshopappApiResourceCategories;
use WebshopappApiResourceCategoriesImage;
use WebshopappApiResourceCategoriesProducts;
use WebshopappApiResourceCategoriesProductsBulk;
use WebshopappApiResourceCheckouts;
use WebshopappApiResourceCheckoutsOrder;
use WebshopappApiResourceCheckoutsPayment_methods;
use WebshopappApiResourceCheckoutsProducts;
use WebshopappApiResourceCheckoutsShipment_methods;
use WebshopappApiResourceCheckoutsValidate;
use WebshopappApiResourceContacts;
use WebshopappApiResourceCountries;
use WebshopappApiResourceCustomers;
use WebshopappApiResourceCustomersLogin;
use WebshopappApiResourceCustomersMetafields;
use WebshopappApiResourceCustomersTokens;
use WebshopappApiResourceDashboard;
use WebshopappApiResourceDeliverydates;
use WebshopappApiResourceDiscountrules;
use WebshopappApiResourceDiscounts;
use WebshopappApiResourceEvents;
use WebshopappApiResourceExternal_services;
use WebshopappApiResourceFiles;
use WebshopappApiResourceFilters;
use WebshopappApiResourceFiltersValues;
use WebshopappApiResourceGroups;
use WebshopappApiResourceGroupsCustomers;
use WebshopappApiResourceInvoices;
use WebshopappApiResourceInvoicesItems;
use WebshopappApiResourceInvoicesMetafields;
use WebshopappApiResourceLanguages;
use WebshopappApiResourceLocations;
use WebshopappApiResourceMetafields;
use WebshopappApiResourceOrders;
use WebshopappApiResourceOrdersCredit;
use WebshopappApiResourceOrdersCustomstatuses;
use WebshopappApiResourceOrdersEvents;
use WebshopappApiResourceOrdersMetafields;
use WebshopappApiResourceOrdersProducts;
use WebshopappApiResourcePaymentmethods;
use WebshopappApiResourceProducts;
use WebshopappApiResourceProductsAttributes;
use WebshopappApiResourceProductsFiltervalues;
use WebshopappApiResourceProductsImages;
use WebshopappApiResourceProductsMetafields;
use WebshopappApiResourceProductsRelations;
use WebshopappApiResourceQuotes;
use WebshopappApiResourceQuotesConvert;
use WebshopappApiResourceQuotesPaymentmethods;
use WebshopappApiResourceQuotesProducts;
use WebshopappApiResourceQuotesShippingmethods;
use WebshopappApiResourceRedirects;
use WebshopappApiResourceReturns;
use WebshopappApiResourceReviews;
use WebshopappApiResourceSets;
use WebshopappApiResourceShipments;
use WebshopappApiResourceShipmentsMetafields;
use WebshopappApiResourceShipmentsProducts;
use WebshopappApiResourceShippingmethods;
use WebshopappApiResourceShippingmethodsCountries;
use WebshopappApiResourceShippingmethodsValues;
use WebshopappApiResourceShop;
use WebshopappApiResourceShopCompany;
use WebshopappApiResourceShopJavascript;
use WebshopappApiResourceShopLimits;
use WebshopappApiResourceShopMetafields;
use WebshopappApiResourceShopScripts;
use WebshopappApiResourceShopSettings;
use WebshopappApiResourceShopTracking;
use WebshopappApiResourceShopWebsite;
use WebshopappApiResourceSubscriptions;
use WebshopappApiResourceSuppliers;
use WebshopappApiResourceTags;
use WebshopappApiResourceTagsProducts;
use WebshopappApiResourceTaxes;
use WebshopappApiResourceTaxesOverrides;
use WebshopappApiResourceTextpages;
use WebshopappApiResourceThemeCategories;
use WebshopappApiResourceThemeProducts;
use WebshopappApiResourceTickets;
use WebshopappApiResourceTicketsMessages;
use WebshopappApiResourceTime;
use WebshopappApiResourceTypes;
use WebshopappApiResourceTypesAttributes;
use WebshopappApiResourceVariants;
use WebshopappApiResourceVariantsBulk;
use WebshopappApiResourceVariantsImage;
use WebshopappApiResourceVariantsMetafields;
use WebshopappApiResourceVariantsMovements;
use WebshopappApiResourceWebhooks;

class LightspeedEcomApi
{
    protected ?WebshopappApiClient $api = null;

    public function __construct(WebshopappApiClient $apiClient)
    {
        $this->api = $apiClient;
    }

    public function setCredentials(string $key, string $secret): self
    {
        $this->api->setApiKey($key);
        $this->api->setApiSecret($secret);

        return $this;
    }

    public function setLanguage(string $language): self
    {
        $this->api->setApiLanguage($language);

        return $this;
    }

    public function getMaxCalls(): int
    {
        return $this->api->getMaxCalls();
    }

    public function getRemainingCalls(bool $fromCache = true): int
    {
        if ($fromCache === true && config('lightspeed-ecom-api.save_remaining_calls_to_cache') === true) {
            return cache()->get('ls_ecom_api_remaining_' . $this->api->getApiKey(), 300);
        }

        return $this->api->getRemainingCalls();
    }

    public function getResetTime(bool $fromCache = true): Carbon
    {
        if ($fromCache === true && config('lightspeed-ecom-api.save_remaining_calls_to_cache') === true) {
            return cache()->get('ls_ecom_api_reset_' . $this->api->getApiKey(), Carbon::now());
        }

        return Carbon::now()->addSeconds($this->api->getResetTime());
    }

    public function getCallsMade(): int
    {
        return $this->api->getApiCallsMade();
    }

    public function account(): WebshopappApiResourceAccount
    {
        return $this->api->account;
    }

    public function accountMetafields(): WebshopappApiResourceAccountMetafields
    {
        return $this->api->accountMetafields;
    }

    public function accountPermissions(): WebshopappApiResourceAccountPermissions
    {
        return $this->api->accountPermissions;
    }

    public function accountRatelimit(): WebshopappApiResourceAccountRatelimit
    {
        return $this->api->accountRatelimit;
    }

    public function additionalcosts(): WebshopappApiResourceAdditionalcosts
    {
        return $this->api->additionalcosts;
    }

    public function attributes(): WebshopappApiResourceAttributes
    {
        return $this->api->attributes;
    }

    public function blogs(): WebshopappApiResourceBlogs
    {
        return $this->api->blogs;
    }

    public function blogsArticles(): WebshopappApiResourceBlogsArticles
    {
        return $this->api->blogsArticles;
    }

    public function blogsArticlesImage(): WebshopappApiResourceBlogsArticlesImage
    {
        return $this->api->blogsArticlesImage;
    }

    public function blogsArticlesTags(): WebshopappApiResourceBlogsArticlesTags
    {
        return $this->api->blogsArticlesTags;
    }

    public function blogsComments(): WebshopappApiResourceBlogsComments
    {
        return $this->api->blogsComments;
    }

    public function blogsTags(): WebshopappApiResourceBlogsTags
    {
        return $this->api->blogsTags;
    }

    public function brands(): WebshopappApiResourceBrands
    {
        return $this->api->brands;
    }

    public function brandsImage(): WebshopappApiResourceBrandsImage
    {
        return $this->api->brandsImage;
    }

    public function catalog(): WebshopappApiResourceCatalog
    {
        return $this->api->catalog;
    }

    public function categories(): WebshopappApiResourceCategories
    {
        return $this->api->categories;
    }

    public function categoriesImage(): WebshopappApiResourceCategoriesImage
    {
        return $this->api->categoriesImage;
    }

    public function categoriesProducts(): WebshopappApiResourceCategoriesProducts
    {
        return $this->api->categoriesProducts;
    }

    public function categoriesProductsBulk(): WebshopappApiResourceCategoriesProductsBulk
    {
        return $this->api->categoriesProductsBulk;
    }

    public function checkouts(): WebshopappApiResourceCheckouts
    {
        return $this->api->checkouts;
    }

    public function checkoutsOrder(): WebshopappApiResourceCheckoutsOrder
    {
        return $this->api->checkoutsOrder;
    }

    public function checkoutsPayment_methods(): WebshopappApiResourceCheckoutsPayment_methods
    {
        return $this->api->checkoutsPayment_methods;
    }

    public function checkoutsProducts(): WebshopappApiResourceCheckoutsProducts
    {
        return $this->api->checkoutsProducts;
    }

    public function checkoutsShipment_methods(): WebshopappApiResourceCheckoutsShipment_methods
    {
        return $this->api->checkoutsShipment_methods;
    }

    public function checkoutsValidate(): WebshopappApiResourceCheckoutsValidate
    {
        return $this->api->checkoutsValidate;
    }

    public function contacts(): WebshopappApiResourceContacts
    {
        return $this->api->contacts;
    }

    public function countries(): WebshopappApiResourceCountries
    {
        return $this->api->countries;
    }

    public function customers(): WebshopappApiResourceCustomers
    {
        return $this->api->customers;
    }

    public function customersLogin(): WebshopappApiResourceCustomersLogin
    {
        return $this->api->customersLogin;
    }

    public function customersMetafields(): WebshopappApiResourceCustomersMetafields
    {
        return $this->api->customersMetafields;
    }

    public function customersTokens(): WebshopappApiResourceCustomersTokens
    {
        return $this->api->customersTokens;
    }

    public function dashboard(): WebshopappApiResourceDashboard
    {
        return $this->api->dashboard;
    }

    public function deliverydates(): WebshopappApiResourceDeliverydates
    {
        return $this->api->deliverydates;
    }

    public function discountrules(): WebshopappApiResourceDiscountrules
    {
        return $this->api->discountrules;
    }

    public function discounts(): WebshopappApiResourceDiscounts
    {
        return $this->api->discounts;
    }

    public function events(): WebshopappApiResourceEvents
    {
        return $this->api->events;
    }

    public function external_services(): WebshopappApiResourceExternal_services
    {
        return $this->api->external_services;
    }

    public function files(): WebshopappApiResourceFiles
    {
        return $this->api->files;
    }

    public function filters(): WebshopappApiResourceFilters
    {
        return $this->api->filters;
    }

    public function filtersValues(): WebshopappApiResourceFiltersValues
    {
        return $this->api->filtersValues;
    }

    public function groups(): WebshopappApiResourceGroups
    {
        return $this->api->groups;
    }

    public function groupsCustomers(): WebshopappApiResourceGroupsCustomers
    {
        return $this->api->groupsCustomers;
    }

    public function invoices(): WebshopappApiResourceInvoices
    {
        return $this->api->invoices;
    }

    public function invoicesItems(): WebshopappApiResourceInvoicesItems
    {
        return $this->api->invoicesItems;
    }

    public function invoicesMetafields(): WebshopappApiResourceInvoicesMetafields
    {
        return $this->api->invoicesMetafields;
    }

    public function languages(): WebshopappApiResourceLanguages
    {
        return $this->api->languages;
    }

    public function locations(): WebshopappApiResourceLocations
    {
        return $this->api->locations;
    }

    public function metafields(): WebshopappApiResourceMetafields
    {
        return $this->api->metafields;
    }

    public function orders(): WebshopappApiResourceOrders
    {
        return $this->api->orders;
    }

    public function ordersCredit(): WebshopappApiResourceOrdersCredit
    {
        return $this->api->ordersCredit;
    }

    public function ordersMetafields(): WebshopappApiResourceOrdersMetafields
    {
        return $this->api->ordersMetafields;
    }

    public function ordersProducts(): WebshopappApiResourceOrdersProducts
    {
        return $this->api->ordersProducts;
    }

    public function ordersCustomstatuses(): WebshopappApiResourceOrdersCustomstatuses
    {
        return $this->api->ordersCustomstatuses;
    }

    public function ordersEvents(): WebshopappApiResourceOrdersEvents
    {
        return $this->api->ordersEvents;
    }

    public function paymentmethods(): WebshopappApiResourcePaymentmethods
    {
        return $this->api->paymentmethods;
    }

    public function products(): WebshopappApiResourceProducts
    {
        return $this->api->products;
    }

    public function productsAttributes(): WebshopappApiResourceProductsAttributes
    {
        return $this->api->productsAttributes;
    }

    public function productsFiltervalues(): WebshopappApiResourceProductsFiltervalues
    {
        return $this->api->productsFiltervalues;
    }

    public function productsImages(): WebshopappApiResourceProductsImages
    {
        return $this->api->productsImages;
    }

    public function productsMetafields(): WebshopappApiResourceProductsMetafields
    {
        return $this->api->productsMetafields;
    }

    public function productsRelations(): WebshopappApiResourceProductsRelations
    {
        return $this->api->productsRelations;
    }

    public function quotes(): WebshopappApiResourceQuotes
    {
        return $this->api->quotes;
    }

    public function quotesConvert(): WebshopappApiResourceQuotesConvert
    {
        return $this->api->quotesConvert;
    }

    public function quotesPaymentmethods(): WebshopappApiResourceQuotesPaymentmethods
    {
        return $this->api->quotesPaymentmethods;
    }

    public function quotesProducts(): WebshopappApiResourceQuotesProducts
    {
        return $this->api->quotesProducts;
    }

    public function quotesShippingmethods(): WebshopappApiResourceQuotesShippingmethods
    {
        return $this->api->quotesShippingmethods;
    }

    public function redirects(): WebshopappApiResourceRedirects
    {
        return $this->api->redirects;
    }

    public function returns(): WebshopappApiResourceReturns
    {
        return $this->api->returns;
    }

    public function reviews(): WebshopappApiResourceReviews
    {
        return $this->api->reviews;
    }

    public function sets(): WebshopappApiResourceSets
    {
        return $this->api->sets;
    }

    public function shipments(): WebshopappApiResourceShipments
    {
        return $this->api->shipments;
    }

    public function shipmentsMetafields(): WebshopappApiResourceShipmentsMetafields
    {
        return $this->api->shipmentsMetafields;
    }

    public function shipmentsProducts(): WebshopappApiResourceShipmentsProducts
    {
        return $this->api->shipmentsProducts;
    }

    public function shippingmethods(): WebshopappApiResourceShippingmethods
    {
        return $this->api->shippingmethods;
    }

    public function shippingmethodsCountries(): WebshopappApiResourceShippingmethodsCountries
    {
        return $this->api->shippingmethodsCountries;
    }

    public function shippingmethodsValues(): WebshopappApiResourceShippingmethodsValues
    {
        return $this->api->shippingmethodsValues;
    }

    public function shop(): WebshopappApiResourceShop
    {
        return $this->api->shop;
    }

    public function shopCompany(): WebshopappApiResourceShopCompany
    {
        return $this->api->shopCompany;
    }

    public function shopJavascript(): WebshopappApiResourceShopJavascript
    {
        return $this->api->shopJavascript;
    }

    public function shopLimits(): WebshopappApiResourceShopLimits
    {
        return $this->api->shopLimits;
    }

    public function shopMetafields(): WebshopappApiResourceShopMetafields
    {
        return $this->api->shopMetafields;
    }

    public function shopScripts(): WebshopappApiResourceShopScripts
    {
        return $this->api->shopScripts;
    }

    public function shopSettings(): WebshopappApiResourceShopSettings
    {
        return $this->api->shopSettings;
    }

    public function shopTracking(): WebshopappApiResourceShopTracking
    {
        return $this->api->shopTracking;
    }

    public function shopWebsite(): WebshopappApiResourceShopWebsite
    {
        return $this->api->shopWebsite;
    }

    public function subscriptions(): WebshopappApiResourceSubscriptions
    {
        return $this->api->subscriptions;
    }

    public function suppliers(): WebshopappApiResourceSuppliers
    {
        return $this->api->suppliers;
    }

    public function tags(): WebshopappApiResourceTags
    {
        return $this->api->tags;
    }

    public function tagsProducts(): WebshopappApiResourceTagsProducts
    {
        return $this->api->tagsProducts;
    }

    public function taxes(): WebshopappApiResourceTaxes
    {
        return $this->api->taxes;
    }

    public function taxesOverrides(): WebshopappApiResourceTaxesOverrides
    {
        return $this->api->taxesOverrides;
    }

    public function textpages(): WebshopappApiResourceTextpages
    {
        return $this->api->textpages;
    }

    public function themeCategories(): WebshopappApiResourceThemeCategories
    {
        return $this->api->themeCategories;
    }

    public function themeProducts(): WebshopappApiResourceThemeProducts
    {
        return $this->api->themeProducts;
    }

    public function tickets(): WebshopappApiResourceTickets
    {
        return $this->api->tickets;
    }

    public function ticketsMessages(): WebshopappApiResourceTicketsMessages
    {
        return $this->api->ticketsMessages;
    }

    public function time(): WebshopappApiResourceTime
    {
        return $this->api->time;
    }

    public function types(): WebshopappApiResourceTypes
    {
        return $this->api->types;
    }

    public function typesAttributes(): WebshopappApiResourceTypesAttributes
    {
        return $this->api->typesAttributes;
    }

    public function variants(): WebshopappApiResourceVariants
    {
        return $this->api->variants;
    }

    public function variantsImage(): WebshopappApiResourceVariantsImage
    {
        return $this->api->variantsImage;
    }

    public function variantsMetafields(): WebshopappApiResourceVariantsMetafields
    {
        return $this->api->variantsMetafields;
    }

    public function variantsBulk(): WebshopappApiResourceVariantsBulk
    {
        return $this->api->variantsBulk;
    }

    public function variantsMovements(): WebshopappApiResourceVariantsMovements
    {
        return $this->api->variantsMovements;
    }

    public function webhooks(): WebshopappApiResourceWebhooks
    {
        return $this->api->webhooks;
    }
}
