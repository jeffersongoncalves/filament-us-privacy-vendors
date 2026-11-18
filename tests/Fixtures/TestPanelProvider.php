<?php

namespace JeffersonGoncalves\Filament\UsPrivacyVendors\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\UsPrivacyVendors\UsPrivacyVendorsPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                UsPrivacyVendorsPlugin::make(),
            ]);
    }
}
