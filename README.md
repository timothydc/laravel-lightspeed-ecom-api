# Connect with the Lightspeed eCom API

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Github Tests Action Tests][ico-github-actions-tests]][link-github-actions-tests]
[![Github Tests Action Styling][ico-github-actions-styling]][link-github-actions-styling]

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

Via Composer:

```bash
composer require timothydc/laravel-lightspeed-ecom-api
```

## Configuration

You can publish the config file with:
```bash
php artisan vendor:publish --tag=lightspeed-ecom-api:config 
```

## Usage

Interaction works the same as the Lightspeed API.


#### Authentication
``` php
// change API language
LightspeedEcomApi::setApiLanguage('en');

// change API key and secret
LightspeedEcomApi::setCredentials('key', 'secret');
```

#### Rate limits

By default, each API key caches its remaining calls and next reset time.
If you would like to disable this behavior, deactive this feature by setting `save_remaining_calls_to_cache` to `false` in `config/lightspeed-ecom-api.php`.

``` php
// get max calls for your API keys
LightspeedEcomApi::getMaxCalls();

// get Carbon with next reset time - from the cache
LightspeedEcomApi::getResetTime();

// get Carbon with next reset time - from the last API response header
LightspeedEcomApi::getResetTime(false);

// get available API limits - from the cache
LightspeedEcomApi::getRemainingCalls();

// get available API limits - from the last API response header
LightspeedEcomApi::getRemainingCalls(false);
```

#### Calling resources
``` php
// get products
LightspeedEcomApi::products()->get();

// get single product
LightspeedEcomApi::products()->get(123456789);

// get filtered products
LightspeedEcomApi::products()->get(null, ['limit' => 250, 'page' => 1, 'since_id' => 123]);

// create product
LightspeedEcomApi::products()->create(['title' => 'my product']);

// update product
LightspeedEcomApi::products()->update(123456789, ['title' => 'my other product']);
```

## Testing

``` bash
composer test
```

## Security

If you discover any security related issues, please email mail@timothydc.be instead of using the issue tracker.

## Credits

- [Timothy De Cort][link-author]
- [Gunharth][link-gunharth] (https://github.com/gunharth/laravel-lightspeed-api)
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/timothydc/laravel-lightspeed-ecom-api.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/timothydc/laravel-lightspeed-ecom-api.svg?style=flat-square
[ico-github-actions-tests]: https://img.shields.io/github/workflow/status/timothydc/laravel-lightspeed-ecom-api/run-tests?label=tests&style=flat-square
[ico-github-actions-styling]: https://img.shields.io/github/workflow/status/timothydc/laravel-lightspeed-ecom-api/fix-styling?label=styling&style=flat-square

[link-packagist]: https://packagist.org/packages/timothydc/laravel-lightspeed-ecom-api
[link-downloads]: https://packagist.org/packages/timothydc/laravel-lightspeed-ecom-api
[link-github-actions-tests]: https://github.com/timothydc/laravel-lightspeed-ecom-api/actions?query=workflow%3Arun-tests+branch%3Amaster
[link-github-actions-styling]: https://github.com/timothydc/laravel-lightspeed-ecom-api/actions?query=workflow%3Afix-styling+branch%3Amaster
[link-author]: https://github.com/timothydc
[link-gunharth]: https://github.com/gunharth
[link-contributors]: ../../contributors
