<div class="filament-hidden">

![Filament US Privacy Vendors](https://raw.githubusercontent.com/jeffersongoncalves/filament-us-privacy-vendors/2.x/art/jeffersongoncalves-filament-us-privacy-vendors.png)

</div>

# Filament US Privacy Vendors

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-us-privacy-vendors.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-us-privacy-vendors)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-us-privacy-vendors/tests.yml?branch=2.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-us-privacy-vendors/actions?query=workflow%3Atests+branch%3A2.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-us-privacy-vendors/fix-php-code-style-issues.yml?branch=2.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-us-privacy-vendors/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A2.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-us-privacy-vendors.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-us-privacy-vendors)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-us-privacy-vendors.svg?style=flat-square)](LICENSE.md)

The processors and third parties you disclose personal data to under the US state privacy laws, managed in your Filament panel, built on [laravel-us-privacy-vendors](https://github.com/jeffersongoncalves/laravel-us-privacy-vendors): the contract terms every state requires of processors, reviews by risk, termination and the deletion or return of the data.

> This plugin gives you tooling. It does not make you compliant on its own.

## Features

- Processors with the controller-processor contract checklist (instructions, nature and purpose, data types, duration, confidentiality, deletion or return, compliance information, assessments, subcontractors).
- Third parties need no contract and are not flagged for one.
- Issues per vendor: contract missing, expired or incomplete, review due, data return pending.
- 19 languages.

## Compatibility

| Plugin Version | Filament |
|---|---|
| [1.x](https://github.com/jeffersongoncalves/filament-us-privacy-vendors/tree/1.x) | 3.x |
| [2.x](https://github.com/jeffersongoncalves/filament-us-privacy-vendors/tree/2.x) | 4.x |
| [3.x](https://github.com/jeffersongoncalves/filament-us-privacy-vendors/tree/3.x) | 5.x |

## Installation

```bash
composer require jeffersongoncalves/filament-us-privacy-vendors:"^2.0"
```

Install and configure [laravel-us-privacy-vendors](https://github.com/jeffersongoncalves/laravel-us-privacy-vendors) first.

## Usage

```php
use JeffersonGoncalves\Filament\UsPrivacyVendors\UsPrivacyVendorsPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            UsPrivacyVendorsPlugin::make()
                ->navigationGroup('Privacy')   // default: no group
                ->navigationSort(2)
                ->slug('vendors'),
        ]);
}
```

All fluent methods are optional.

> The pages have no authorization of their own: register the plugin only on panels whose users may see them, or override `canAccess()` in a subclass.

## Related plugins

- [filament-us-privacy](https://github.com/jeffersongoncalves/filament-us-privacy): personal data inventory and the state law rules.
- [filament-us-privacy-opt-out](https://github.com/jeffersongoncalves/filament-us-privacy-opt-out): opt-outs, sensitive data consent and Global Privacy Control.
- [filament-us-privacy-requests](https://github.com/jeffersongoncalves/filament-us-privacy-requests): consumer requests and appeals.
- [filament-us-privacy-notices](https://github.com/jeffersongoncalves/filament-us-privacy-notices): processing activities behind the privacy notice.
- [filament-us-privacy-assessments](https://github.com/jeffersongoncalves/filament-us-privacy-assessments): data protection assessments.
- [filament-us-privacy-minors](https://github.com/jeffersongoncalves/filament-us-privacy-minors): age checks, guardians and minors' consent.

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

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
