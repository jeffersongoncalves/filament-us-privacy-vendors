<?php

namespace JeffersonGoncalves\Filament\UsPrivacyVendors;

use Filament\Contracts\Plugin;
use Filament\Panel;

class UsPrivacyVendorsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-us-privacy-vendors';
    }

    public function register(Panel $panel): void
    {
    }

    public function boot(Panel $panel): void
    {
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        return filament(app(static::class)->getId());
    }
}
