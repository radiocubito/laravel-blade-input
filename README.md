# A self-hosted invoice manager

[![Latest Version on Packagist](https://img.shields.io/packagist/v/radiocubito/laravel-blade-input.svg?style=flat-square)](https://packagist.org/packages/radiocubito/laravel-blade-input)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/radiocubito/laravel-blade-input/Tests?label=tests)](https://github.com/radiocubito/laravel-blade-input/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/radiocubito/laravel-blade-input.svg?style=flat-square)](https://packagist.org/packages/radiocubito/laravel-blade-input)


laravel-blade-input let your generate and manage simple invoices.

## Installation

You can install the package via composer:

```bash
composer require radiocubito/laravel-blade-input
```

## Usage

``` php
$bladeInput = new Radiocubito\BladeInput();
echo $bladeInput->echoPhrase('Hello, Radiocubito!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email oliver@radiocubito.com instead of using the issue tracker.

## Credits

- [Oliver Jiménez-Servín](https://github.com/oliverds)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
