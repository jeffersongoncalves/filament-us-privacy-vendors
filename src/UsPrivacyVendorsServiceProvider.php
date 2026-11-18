<?php

namespace JeffersonGoncalves\Filament\UsPrivacyVendors;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class UsPrivacyVendorsServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-us-privacy-vendors';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
