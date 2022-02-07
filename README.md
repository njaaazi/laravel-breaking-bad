# This is my package laravel-breaking-bad, a breaking bad api wrapper for laravel.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/njaaazi/laravel-breaking-bad.svg?style=flat-square)](https://packagist.org/packages/njaaazi/laravel-breaking-bad)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/njaaazi/laravel-breaking-bad/run-tests?label=tests)](https://github.com/njaaazi/laravel-breaking-bad/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/njaaazi/laravel-breaking-bad/Check%20&%20fix%20styling?label=code%20style)](https://github.com/njaaazi/laravel-breaking-bad/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/njaaazi/laravel-breaking-bad.svg?style=flat-square)](https://packagist.org/packages/njaaazi/laravel-breaking-bad)

This is a laravel wrapper for Breaking Bad Api.

## Installation

You can install the package via composer:

```bash
composer require njaaazi/laravel-breaking-bad
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-breaking-bad-config"
```

This is the contents of the published config file:

```php
return [
    'baseUrl'	=> env('BREAKINGBAD_BASE_URL') ? env('BREAKINGBAD_BASE_URL') : 'https://www.breakingbadapi.com/api/',
];
```


## Usage

### Using the application container

```php
$breakingBad = new Njaaazi\BreakingBad\BreakingBad();
$breakingBad->quotes()->random();
```

### Using the facade

```php
BreakingBad::quotes()->random();
```


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Njazi Shehu](https://github.com/njaaazi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
