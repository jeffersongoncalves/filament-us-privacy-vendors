<?php

namespace JeffersonGoncalves\Filament\UsPrivacyVendors;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UsPrivacyVendorsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-us-privacy-vendors')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
