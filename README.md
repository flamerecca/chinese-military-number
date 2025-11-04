# 中文軍用數字

[![Latest Version on Packagist](https://img.shields.io/packagist/v/recca/chinese-military-number.svg?style=flat-square)](https://packagist.org/packages/recca/chinese-military-number)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/flamerecca/chinese-military-number/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/flamerecca/chinese-military-number/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/flamerecca/chinese-military-number/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/flamerecca/chinese-military-number/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/recca/chinese-military-number.svg?style=flat-square)](https://packagist.org/packages/recca/chinese-military-number)

將數字轉換成中文軍用數字

## Support Spatie

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require recca/chinese-military-number
```

## Usage

```php
$chineseMilitaryNumber = new Recca\ChineseMilitaryNumber();
echo $chineseMilitaryNumber->format('0912'); // 洞勾么兩
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

- [recca](https://github.com/flamerecca)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
