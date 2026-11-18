<?php

namespace JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors\VendorActions;
use JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors\VendorResource;

class EditVendor extends EditRecord
{
    protected static string $resource = VendorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ...VendorActions::all(),
            DeleteAction::make(),
        ];
    }
}
