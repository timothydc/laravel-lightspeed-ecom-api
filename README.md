# Connect with the Lightspeed eCom API

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Github Tests Action][ico-github-actions]][link-github-actions]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

Via Composer:

```bash
composer require timothydc/laravel-lightspeed-ecom-api
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="TimothyDC\LightpeedEcomApi\LightpeedEcomApiServiceProvider" --tag="config"
```

## Usage

``` php
// change API language
LightspeedEcomApi::setApiLanguage('en');

// get products
LightspeedEcomApi::products->get();

// get single product
LightspeedEcomApi::products->get(123456789);

// get filtered products
LightspeedEcomApi::products->get(null, ['limit' => 250, 'page' => 1, 'since_id' => 123]);

// create product
LightspeedEcomApi::products->create(['title' => 'my product']);

// update product
LightspeedEcomApi::products->update(123456789, ['title' => 'my other product']);
```

## Testing

``` bash
composer test
```

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Timothy De Cort][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-packagist]: https://packagist.org/packages/timothydc/laravel-lightspeed-ecom-product-feeds
[link-downloads]: https://packagist.org/packages/timothydc/laravel-lightspeed-ecom-product-feeds
[link-github-actions]: https://github.com/timothydc/laravel-lightspeed-ecom-product-feeds/actions?query=workflow%3Arun-tests+branch%3Amaster
[link-styleci]: https://styleci.io/repos/275463792
[link-author]: https://github.com/timothydc
[link-contributors]: ../../contributors
