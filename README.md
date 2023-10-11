# This is my package tc-osdata

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sitesurfer/tc-osdata.svg?style=flat-square)](https://packagist.org/packages/sitesurfer/tc-osdata)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/sitesurfer/tc-osdata/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sitesurfer/tc-osdata/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/sitesurfer/tc-osdata/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/sitesurfer/tc-osdata/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sitesurfer/tc-osdata.svg?style=flat-square)](https://packagist.org/packages/sitesurfer/tc-osdata)

This package simply wraps the OS API into a Laravel friendly package.
The facade is the easiest way to use the package.
For instance : TCOSDATA::postcode('1234AB') will return the data for that postcode.
(Dont forget to add the use statement at the top of your file : use Sitesurfer\tcosdata\Facades\TCOSDATA;)

```php  


## Installation

You can install the package via composer:

```bash
composer require sitesurfer/tc-osdata
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="tc-osdata-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="tc-osdata-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="tc-osdata-views"
```

## Usage

```php
$tCOsdata = new Sitesurfer\TCOsdata();
echo $tCOsdata->echoPhrase('Hello, Sitesurfer!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Owen Lees](https://github.com/sitesurfer)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
