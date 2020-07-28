# Connect with the Lightspeed eCom API

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Github Tests Action][ico-github-actions]][link-github-actions]

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

If you discover any security related issues, please email mail@timothydc.be instead of using the issue tracker.

## Credits

- [Timothy De Cort][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/timothydc/laravel-lightspeed-ecom-api.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/timothydc/laravel-lightspeed-ecom-api.svg?style=flat-square
[ico-github-actions]: https://img.shields.io/github/workflow/status/timothydc/laravel-lightspeed-ecom-api/run-tests?label=tests&style=flat-square

[link-packagist]: https://packagist.org/packages/timothydc/laravel-lightspeed-ecom-api
[link-downloads]: https://packagist.org/packages/timothydc/laravel-lightspeed-ecom-api
[link-github-actions]: https://github.com/timothydc/laravel-lightspeed-ecom-api/actions?query=workflow%3Arun-tests+branch%3Amaster
[link-author]: https://github.com/timothydc
[link-contributors]: ../../contributors
