<?php

namespace JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use JeffersonGoncalves\UsPrivacyVendors\Models\Vendor;

class VendorActions
{
    /**
     * @return list<Action>
     */
    public static function all(): array
    {
        return [static::review(), static::terminate(), static::dataReturned()];
    }

    public static function review(): Action
    {
        return Action::make('review')
            ->label(VendorResource::label('actions.review'))
            ->icon('heroicon-o-check-badge')
            ->requiresConfirmation()
            ->visible(fn (Vendor $record): bool => $record->terminated_at === null)
            ->action(function (Vendor $record): void {
                $record->markReviewed();
                Notification::make()->success()->title(VendorResource::label('notifications.reviewed'))->send();
            });
    }

    public static function terminate(): Action
    {
        return Action::make('terminate')
            ->label(VendorResource::label('actions.terminate'))
            ->icon('heroicon-o-no-symbol')
            ->color('danger')
            ->requiresConfirmation()
            ->modalDescription(VendorResource::label('help.terminate'))
            ->visible(fn (Vendor $record): bool => $record->terminated_at === null)
            ->action(fn (Vendor $record) => $record->terminate());
    }

    public static function dataReturned(): Action
    {
        return Action::make('dataReturned')
            ->label(VendorResource::label('actions.data_returned'))
            ->icon('heroicon-o-arrow-uturn-left')
            ->color('success')
            ->requiresConfirmation()
            ->visible(fn (Vendor $record): bool => $record->terminated_at !== null && $record->data_returned_at === null)
            ->action(fn (Vendor $record) => $record->confirmDataReturned());
    }
}
