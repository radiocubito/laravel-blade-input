# Laravel blade input components made with Tailwind CSS

[![Latest Version on Packagist](https://img.shields.io/packagist/v/radiocubito/laravel-blade-input.svg?style=flat-square)](https://packagist.org/packages/radiocubito/laravel-blade-input)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/radiocubito/laravel-blade-input/Tests?label=tests)](https://github.com/radiocubito/laravel-blade-input/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/radiocubito/laravel-blade-input.svg?style=flat-square)](https://packagist.org/packages/radiocubito/laravel-blade-input)


laravel-blade-input is a small collection of blade components for input fields. Currently text, textarea and select are available.

## Installation

You can install the package via composer:

```bash
composer require radiocubito/laravel-blade-input
```

## Usage

``` blade
<x-input.group label="Email address" for="email" :error="$errors->first('email')">
    <x-input.text wire:model.lazy="email" id="email" required autofocus />
</x-input.group>

<x-input.group label="Countries" for="countries" :error="$errors->first('countries')">
    <x-input.select wire:model="countries" id="countries" :options="$countries" />
</x-input.group>

<x-input.group label="Description" for="description" :error="$errors->first('description')">
    <x-input.textarea wire:model="description" id="description" />
</x-input.group>
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

- [Oliver Jiménez Servín](https://github.com/oliverds)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
