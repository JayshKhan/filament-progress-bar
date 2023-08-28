# The Filament Progress Bar UI package is a versatile and user-friendly component designed for seamless integration into admin panels. It empowers developers to effortlessly display the progress of tasks, uploads, or any ongoing processes within their web applications. With its clean and intuitive interface, users can easily track the status of operations in real-time, enhancing the overall user experience.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jaysh-khan/filament-progress-bar.svg?style=flat-square)](https://packagist.org/packages/jaysh-khan/filament-progress-bar)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jaysh-khan/filament-progress-bar/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jaysh-khan/filament-progress-bar/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jaysh-khan/filament-progress-bar/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jaysh-khan/filament-progress-bar/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jaysh-khan/filament-progress-bar.svg?style=flat-square)](https://packagist.org/packages/jaysh-khan/filament-progress-bar)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require jayshkhan/filament-progress-bar
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-progress-bar-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-progress-bar-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-progress-bar-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$progressBar = new Jayshkhan\ProgressBar();
echo $progressBar->echoPhrase('Hello, Jayshkhan!');
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

- [Jaysh Khan](https://github.com/Jayshkhan)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
