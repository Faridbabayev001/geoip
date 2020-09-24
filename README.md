# PHP library to work with [ReallyFreeFeoip](https://reallyfreegeoip.org/)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/faridbabayev/geoip.svg?style=flat-square)](https://packagist.org/packages/faridbabayev/geoip)
[![Build Status](https://img.shields.io/travis/faridbabayev/geoip/master.svg?style=flat-square)](https://travis-ci.org/faridbabayev/geoip)
[![Quality Score](https://img.shields.io/scrutinizer/g/faridbabayev/geoip.svg?style=flat-square)](https://scrutinizer-ci.com/g/faridbabayev/geoip)
[![Total Downloads](https://img.shields.io/packagist/dt/faridbabayev/geoip.svg?style=flat-square)](https://packagist.org/packages/faridbabayev/geoip)

This package provides an API for the [ReallyFreeFeoip](https://reallyfreegeoip.org/)

## Installation

You can install the package via composer:

```bash
composer require faridbabayev/geoip
```

## Usage

``` php
use FaridBabayev\Geoip\Geoip;

$geoip = new Geoip(); // this will fetch ip geolocation for server ip address
$geoip = new Geoip('75.197.224.3'); // this will ip geolocation for 75.197.224.3
```

You can get ip geolocation by accessing
```php
$geoip = new Geoip();
$geoip->ip;  //return ip address
$geoip->country_code;  // return country code
$geoip->country_name;  // return country name
$geoip->region_code;  // return region code
$geoip->city;  // return city
$geoip->zip_code;  // return zip_code
$geoip->time_zone;  // return time zone
$geoip->latitude;  // return latitude 
$geoip->metro_code;  // return metro_code  
```
You can change ip address for a new ip geolocation by calling ```for()``` method without instantiating new class:
```php
$geoip = new Geoip();
$geoip->for('75.197.224.3');
$geoip->country_code;  // return country code
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email farid.b@code.edu.az instead of using the issue tracker.

## Credits

- [Farid Babayev](https://github.com/Faridbabayev001)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
