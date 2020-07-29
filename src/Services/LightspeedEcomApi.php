<?php

namespace TimothyDC\LightspeedEcomApi\Services;

use WebshopappApiClient;
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

class LightspeedEcomApi extends WebshopappApiClient
{
    public function __construct(array $configuration)
    {
        parent::__construct($configuration['cluster'], $configuration['key'], $configuration['secret'], $configuration['language']);
    }

    public function setCredentials(string $key, string $secret): self
    {
        $this->setApiKey($key);
        $this->setApiSecret($secret);

        return $this;
    }

    public function account(): WebshopappApiResourceAccount
    {
        return $this->account;
    }

    public function accountMetafields(): WebshopappApiResourceAccountMetafields
    {
        return $this->accountMetafields;
    }

    public function accountPermissions(): WebshopappApiResourceAccountPermissions
    {
        return $this->accountPermissions;
    }

    public function accountRatelimit(): WebshopappApiResourceAccountRatelimit
    {
        return $this->accountRatelimit;
    }

    public function additionalcosts(): WebshopappApiResourceAdditionalcosts
    {
        return $this->additionalcosts;
    }

    public function attributes(): WebshopappApiResourceAttributes
    {
        return $this->attributes;
    }

    public function blogs(): WebshopappApiResourceBlogs
    {
        return $this->blogs;
    }

    public function blogsArticles(): WebshopappApiResourceBlogsArticles
    {
        return $this->blogsArticles;
    }

    public function blogsArticlesImage(): WebshopappApiResourceBlogsArticlesImage
    {
        return $this->blogsArticlesImage;
    }

    public function blogsArticlesTags(): WebshopappApiResourceBlogsArticlesTags
    {
        return $this->blogsArticlesTags;
    }

    public function blogsComments(): WebshopappApiResourceBlogsComments
    {
        return $this->blogsComments;
    }

    public function blogsTags(): WebshopappApiResourceBlogsTags
    {
        return $this->blogsTags;
    }

    public function brands(): WebshopappApiResourceBrands
    {
        return $this->brands;
    }

    public function brandsImage(): WebshopappApiResourceBrandsImage
    {
        return $this->brandsImage;
    }

    public function catalog(): WebshopappApiResourceCatalog
    {
        return $this->catalog;
    }

    public function categories(): WebshopappApiResourceCategories
    {
        return $this->categories;
    }

    public function categoriesImage(): WebshopappApiResourceCategoriesImage
    {
        return $this->categoriesImage;
    }

    public function categoriesProducts(): WebshopappApiResourceCategoriesProducts
    {
        return $this->categoriesProducts;
    }

    public function categoriesProductsBulk(): WebshopappApiResourceCategoriesProductsBulk
    {
        return $this->categoriesProductsBulk;
    }

    public function checkouts(): WebshopappApiResourceCheckouts
    {
        return $this->checkouts;
    }

    public function checkoutsOrder(): WebshopappApiResourceCheckoutsOrder
    {
        return $this->checkoutsOrder;
    }

    public function checkoutsPayment_methods(): WebshopappApiResourceCheckoutsPayment_methods
    {
        return $this->checkoutsPayment_methods;
    }

    public function checkoutsProducts(): WebshopappApiResourceCheckoutsProducts
    {
        return $this->checkoutsProducts;
    }

    public function checkoutsShipment_methods(): WebshopappApiResourceCheckoutsShipment_methods
    {
        return $this->checkoutsShipment_methods;
    }

    public function checkoutsValidate(): WebshopappApiResourceCheckoutsValidate
    {
        return $this->checkoutsValidate;
    }

    public function contacts(): WebshopappApiResourceContacts
    {
        return $this->contacts;
    }

    public function countries(): WebshopappApiResourceCountries
    {
        return $this->countries;
    }

    public function customers(): WebshopappApiResourceCustomers
    {
        return $this->customers;
    }

    public function customersLogin(): WebshopappApiResourceCustomersLogin
    {
        return $this->customersLogin;
    }

    public function customersMetafields(): WebshopappApiResourceCustomersMetafields
    {
        return $this->customersMetafields;
    }

    public function customersTokens(): WebshopappApiResourceCustomersTokens
    {
        return $this->customersTokens;
    }

    public function dashboard(): WebshopappApiResourceDashboard
    {
        return $this->dashboard;
    }

    public function deliverydates(): WebshopappApiResourceDeliverydates
    {
        return $this->deliverydates;
    }

    public function discountrules(): WebshopappApiResourceDiscountrules
    {
        return $this->discountrules;
    }

    public function discounts(): WebshopappApiResourceDiscounts
    {
        return $this->discounts;
    }

    public function events(): WebshopappApiResourceEvents
    {
        return $this->events;
    }

    public function external_services(): WebshopappApiResourceExternal_services
    {
        return $this->external_services;
    }

    public function files(): WebshopappApiResourceFiles
    {
        return $this->files;
    }

    public function filters(): WebshopappApiResourceFilters
    {
        return $this->filters;
    }

    public function filtersValues(): WebshopappApiResourceFiltersValues
    {
        return $this->filtersValues;
    }

    public function groups(): WebshopappApiResourceGroups
    {
        return $this->groups;
    }

    public function groupsCustomers(): WebshopappApiResourceGroupsCustomers
    {
        return $this->groupsCustomers;
    }

    public function invoices(): WebshopappApiResourceInvoices
    {
        return $this->invoices;
    }

    public function invoicesItems(): WebshopappApiResourceInvoicesItems
    {
        return $this->invoicesItems;
    }

    public function invoicesMetafields(): WebshopappApiResourceInvoicesMetafields
    {
        return $this->invoicesMetafields;
    }

    public function languages(): WebshopappApiResourceLanguages
    {
        return $this->languages;
    }

    public function locations(): WebshopappApiResourceLocations
    {
        return $this->locations;
    }

    public function metafields(): WebshopappApiResourceMetafields
    {
        return $this->metafields;
    }

    public function orders(): WebshopappApiResourceOrders
    {
        return $this->orders;
    }

    public function ordersCredit(): WebshopappApiResourceOrdersCredit
    {
        return $this->ordersCredit;
    }

    public function ordersMetafields(): WebshopappApiResourceOrdersMetafields
    {
        return $this->ordersMetafields;
    }

    public function ordersProducts(): WebshopappApiResourceOrdersProducts
    {
        return $this->ordersProducts;
    }

    public function ordersCustomstatuses(): WebshopappApiResourceOrdersCustomstatuses
    {
        return $this->ordersCustomstatuses;
    }

    public function ordersEvents(): WebshopappApiResourceOrdersEvents
    {
        return $this->ordersEvents;
    }

    public function paymentmethods(): WebshopappApiResourcePaymentmethods
    {
        return $this->paymentmethods;
    }

    public function products(): WebshopappApiResourceProducts
    {
        return $this->products;
    }

    public function productsAttributes(): WebshopappApiResourceProductsAttributes
    {
        return $this->productsAttributes;
    }

    public function productsFiltervalues(): WebshopappApiResourceProductsFiltervalues
    {
        return $this->productsFiltervalues;
    }

    public function productsImages(): WebshopappApiResourceProductsImages
    {
        return $this->productsImages;
    }

    public function productsMetafields(): WebshopappApiResourceProductsMetafields
    {
        return $this->productsMetafields;
    }

    public function productsRelations(): WebshopappApiResourceProductsRelations
    {
        return $this->productsRelations;
    }

    public function quotes(): WebshopappApiResourceQuotes
    {
        return $this->quotes;
    }

    public function quotesConvert(): WebshopappApiResourceQuotesConvert
    {
        return $this->quotesConvert;
    }

    public function quotesPaymentmethods(): WebshopappApiResourceQuotesPaymentmethods
    {
        return $this->quotesPaymentmethods;
    }

    public function quotesProducts(): WebshopappApiResourceQuotesProducts
    {
        return $this->quotesProducts;
    }

    public function quotesShippingmethods(): WebshopappApiResourceQuotesShippingmethods
    {
        return $this->quotesShippingmethods;
    }

    public function redirects(): WebshopappApiResourceRedirects
    {
        return $this->redirects;
    }

    public function returns(): WebshopappApiResourceReturns
    {
        return $this->returns;
    }

    public function reviews(): WebshopappApiResourceReviews
    {
        return $this->reviews;
    }

    public function sets(): WebshopappApiResourceSets
    {
        return $this->sets;
    }

    public function shipments(): WebshopappApiResourceShipments
    {
        return $this->shipments;
    }

    public function shipmentsMetafields(): WebshopappApiResourceShipmentsMetafields
    {
        return $this->shipmentsMetafields;
    }

    public function shipmentsProducts(): WebshopappApiResourceShipmentsProducts
    {
        return $this->shipmentsProducts;
    }

    public function shippingmethods(): WebshopappApiResourceShippingmethods
    {
        return $this->shippingmethods;
    }

    public function shippingmethodsCountries(): WebshopappApiResourceShippingmethodsCountries
    {
        return $this->shippingmethodsCountries;
    }

    public function shippingmethodsValues(): WebshopappApiResourceShippingmethodsValues
    {
        return $this->shippingmethodsValues;
    }

    public function shop(): WebshopappApiResourceShop
    {
        return $this->shop;
    }

    public function shopCompany(): WebshopappApiResourceShopCompany
    {
        return $this->shopCompany;
    }

    public function shopJavascript(): WebshopappApiResourceShopJavascript
    {
        return $this->shopJavascript;
    }

    public function shopLimits(): WebshopappApiResourceShopLimits
    {
        return $this->shopLimits;
    }

    public function shopMetafields(): WebshopappApiResourceShopMetafields
    {
        return $this->shopMetafields;
    }

    public function shopScripts(): WebshopappApiResourceShopScripts
    {
        return $this->shopScripts;
    }

    public function shopSettings(): WebshopappApiResourceShopSettings
    {
        return $this->shopSettings;
    }

    public function shopTracking(): WebshopappApiResourceShopTracking
    {
        return $this->shopTracking;
    }

    public function shopWebsite(): WebshopappApiResourceShopWebsite
    {
        return $this->shopWebsite;
    }

    public function subscriptions(): WebshopappApiResourceSubscriptions
    {
        return $this->subscriptions;
    }

    public function suppliers(): WebshopappApiResourceSuppliers
    {
        return $this->suppliers;
    }

    public function tags(): WebshopappApiResourceTags
    {
        return $this->tags;
    }

    public function tagsProducts(): WebshopappApiResourceTagsProducts
    {
        return $this->tagsProducts;
    }

    public function taxes(): WebshopappApiResourceTaxes
    {
        return $this->taxes;
    }

    public function taxesOverrides(): WebshopappApiResourceTaxesOverrides
    {
        return $this->taxesOverrides;
    }

    public function textpages(): WebshopappApiResourceTextpages
    {
        return $this->textpages;
    }

    public function themeCategories(): WebshopappApiResourceThemeCategories
    {
        return $this->themeCategories;
    }

    public function themeProducts(): WebshopappApiResourceThemeProducts
    {
        return $this->themeProducts;
    }

    public function tickets(): WebshopappApiResourceTickets
    {
        return $this->tickets;
    }

    public function ticketsMessages(): WebshopappApiResourceTicketsMessages
    {
        return $this->ticketsMessages;
    }

    public function time(): WebshopappApiResourceTime
    {
        return $this->time;
    }

    public function types(): WebshopappApiResourceTypes
    {
        return $this->types;
    }

    public function typesAttributes(): WebshopappApiResourceTypesAttributes
    {
        return $this->typesAttributes;
    }

    public function variants(): WebshopappApiResourceVariants
    {
        return $this->variants;
    }

    public function variantsImage(): WebshopappApiResourceVariantsImage
    {
        return $this->variantsImage;
    }

    public function variantsMetafields(): WebshopappApiResourceVariantsMetafields
    {
        return $this->variantsMetafields;
    }

    public function variantsBulk(): WebshopappApiResourceVariantsBulk
    {
        return $this->variantsBulk;
    }

    public function variantsMovements(): WebshopappApiResourceVariantsMovements
    {
        return $this->variantsMovements;
    }

    public function webhooks(): WebshopappApiResourceWebhooks
    {
        return $this->webhooks;
    }
}
