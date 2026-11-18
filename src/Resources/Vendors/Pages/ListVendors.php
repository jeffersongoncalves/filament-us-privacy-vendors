<?php

namespace JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors\VendorResource;

class ListVendors extends ListRecords
{
    protected static string $resource = VendorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
