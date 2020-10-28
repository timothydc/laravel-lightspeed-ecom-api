<?php

namespace TimothyDC\LightspeedEcomApi;

use Illuminate\Support\Facades\Facade;
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

/**
 * @see \TimothyDC\LightspeedEcomApi\Services\LightspeedEcomApi
 * @method static WebshopappApiResourceAccount account()
 * @method static WebshopappApiResourceAccountMetafields accountMetafields()
 * @method static WebshopappApiResourceAccountPermissions accountPermissions()
 * @method static WebshopappApiResourceAccountRatelimit accountRatelimit()
 * @method static WebshopappApiResourceAdditionalcosts additionalcosts()
 * @method static WebshopappApiResourceAttributes attributes()
 * @method static WebshopappApiResourceBlogs blogs()
 * @method static WebshopappApiResourceBlogsArticles blogsArticles()
 * @method static WebshopappApiResourceBlogsArticlesImage blogsArticlesImage()
 * @method static WebshopappApiResourceBlogsArticlesTags blogsArticlesTags()
 * @method static WebshopappApiResourceBlogsComments blogsComments()
 * @method static WebshopappApiResourceBlogsTags blogsTags()
 * @method static WebshopappApiResourceBrands brands()
 * @method static WebshopappApiResourceBrandsImage brandsImage()
 * @method static WebshopappApiResourceCatalog catalog()
 * @method static WebshopappApiResourceCategories categories()
 * @method static WebshopappApiResourceCategoriesImage categoriesImage()
 * @method static WebshopappApiResourceCategoriesProducts categoriesProducts()
 * @method static WebshopappApiResourceCategoriesProductsBulk categoriesProductsBulk()
 * @method static WebshopappApiResourceCheckouts checkouts()
 * @method static WebshopappApiResourceCheckoutsOrder checkoutsOrder()
 * @method static WebshopappApiResourceCheckoutsPayment_methods checkoutsPayment_methods()
 * @method static WebshopappApiResourceCheckoutsProducts checkoutsProducts()
 * @method static WebshopappApiResourceCheckoutsShipment_methods checkoutsShipment_methods()
 * @method static WebshopappApiResourceCheckoutsValidate checkoutsValidate()
 * @method static WebshopappApiResourceContacts contacts()
 * @method static WebshopappApiResourceCountries countries()
 * @method static WebshopappApiResourceCustomers customers()
 * @method static WebshopappApiResourceCustomersLogin customersLogin()
 * @method static WebshopappApiResourceCustomersMetafields customersMetafields()
 * @method static WebshopappApiResourceCustomersTokens customersTokens()
 * @method static WebshopappApiResourceDashboard dashboard()
 * @method static WebshopappApiResourceDeliverydates deliverydates()
 * @method static WebshopappApiResourceDiscountrules discountrules()
 * @method static WebshopappApiResourceDiscounts discounts()
 * @method static WebshopappApiResourceEvents events()
 * @method static WebshopappApiResourceExternal_services external_services()
 * @method static WebshopappApiResourceFiles files()
 * @method static WebshopappApiResourceFilters filters()
 * @method static WebshopappApiResourceFiltersValues filtersValues()
 * @method static WebshopappApiResourceGroups groups()
 * @method static WebshopappApiResourceGroupsCustomers groupsCustomers()
 * @method static WebshopappApiResourceInvoices invoices()
 * @method static WebshopappApiResourceInvoicesItems invoicesItems()
 * @method static WebshopappApiResourceInvoicesMetafields invoicesMetafields()
 * @method static WebshopappApiResourceLanguages languages()
 * @method static WebshopappApiResourceLocations locations()
 * @method static WebshopappApiResourceMetafields metafields()
 * @method static WebshopappApiResourceOrders orders()
 * @method static WebshopappApiResourceOrdersCredit ordersCredit()
 * @method static WebshopappApiResourceOrdersMetafields ordersMetafields()
 * @method static WebshopappApiResourceOrdersProducts ordersProducts()
 * @method static WebshopappApiResourceOrdersCustomstatuses ordersCustomstatuses()
 * @method static WebshopappApiResourceOrdersEvents ordersEvents()
 * @method static WebshopappApiResourcePaymentmethods paymentmethods()
 * @method static WebshopappApiResourceProducts products()
 * @method static WebshopappApiResourceProductsAttributes productsAttributes()
 * @method static WebshopappApiResourceProductsFiltervalues productsFiltervalues()
 * @method static WebshopappApiResourceProductsImages productsImages()
 * @method static WebshopappApiResourceProductsMetafields productsMetafields()
 * @method static WebshopappApiResourceProductsRelations productsRelations()
 * @method static WebshopappApiResourceQuotes quotes()
 * @method static WebshopappApiResourceQuotesConvert quotesConvert()
 * @method static WebshopappApiResourceQuotesPaymentmethods quotesPaymentmethods()
 * @method static WebshopappApiResourceQuotesProducts quotesProducts()
 * @method static WebshopappApiResourceQuotesShippingmethods quotesShippingmethods()
 * @method static WebshopappApiResourceRedirects redirects()
 * @method static WebshopappApiResourceReturns returns()
 * @method static WebshopappApiResourceReviews reviews()
 * @method static WebshopappApiResourceSets sets()
 * @method static WebshopappApiResourceShipments shipments()
 * @method static WebshopappApiResourceShipmentsMetafields shipmentsMetafields()
 * @method static WebshopappApiResourceShipmentsProducts shipmentsProducts()
 * @method static WebshopappApiResourceShippingmethods shippingmethods()
 * @method static WebshopappApiResourceShippingmethodsCountries shippingmethodsCountries()
 * @method static WebshopappApiResourceShippingmethodsValues shippingmethodsValues()
 * @method static WebshopappApiResourceShop shop()
 * @method static WebshopappApiResourceShopCompany shopCompany()
 * @method static WebshopappApiResourceShopJavascript shopJavascript()
 * @method static WebshopappApiResourceShopLimits shopLimits()
 * @method static WebshopappApiResourceShopMetafields shopMetafields()
 * @method static WebshopappApiResourceShopScripts shopScripts()
 * @method static WebshopappApiResourceShopSettings shopSettings()
 * @method static WebshopappApiResourceShopTracking shopTracking()
 * @method static WebshopappApiResourceShopWebsite shopWebsite()
 * @method static WebshopappApiResourceSubscriptions subscriptions()
 * @method static WebshopappApiResourceSuppliers suppliers()
 * @method static WebshopappApiResourceTags tags()
 * @method static WebshopappApiResourceTagsProducts tagsProducts()
 * @method static WebshopappApiResourceTaxes taxes()
 * @method static WebshopappApiResourceTaxesOverrides taxesOverrides()
 * @method static WebshopappApiResourceTextpages textpages()
 * @method static WebshopappApiResourceThemeCategories themeCategories()
 * @method static WebshopappApiResourceThemeProducts themeProducts()
 * @method static WebshopappApiResourceTickets tickets()
 * @method static WebshopappApiResourceTicketsMessages ticketsMessages()
 * @method static WebshopappApiResourceTime time()
 * @method static WebshopappApiResourceTypes types()
 * @method static WebshopappApiResourceTypesAttributes typesAttributes()
 * @method static WebshopappApiResourceVariants variants()
 * @method static WebshopappApiResourceVariantsImage variantsImage()
 * @method static WebshopappApiResourceVariantsMetafields variantsMetafields()
 * @method static WebshopappApiResourceVariantsBulk variantsBulk()
 * @method static WebshopappApiResourceVariantsMovements variantsMovements()
 * @method static WebshopappApiResourceWebhooks webhook()
 * @method static LightspeedEcomApi setCredentials(string $key, string $secret)
 * @method static LightspeedEcomApi setLanguage(string $language)
 * @method static int getMaxCalls()
 * @method static int getRemainingCalls(bool $fromCache = true)
 * @method static int getResetTime()
 * @method static int getCallsMade()
 */
class LightspeedEcomApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'lightspeed-ecom-api';
    }
}
