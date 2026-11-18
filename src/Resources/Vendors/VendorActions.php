<?php

namespace JeffersonGoncalves\Filament\UsPrivacyVendors\Resources\Vendors;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action as TableAction;
use JeffersonGoncalves\UsPrivacyVendors\Models\Vendor;

class VendorActions
{
    /**
     * @param  class-string<Action|TableAction>  $class
     * @return list<Action|TableAction>
     */
    public static function all(string $class = Action::class): array
    {
        return [static::review($class), static::terminate($class), static::dataReturned($class)];
    }

    public static function review(string $class = Action::class): Action|TableAction
    {
        return $class::make('review')
            ->label(VendorResource::label('actions.review'))
            ->icon('heroicon-o-check-badge')
            ->requiresConfirmation()
            ->visible(fn (Vendor $record): bool => $record->terminated_at === null)
            ->action(function (Vendor $record): void {
                $record->markReviewed();
                Notification::make()->success()->title(VendorResource::label('notifications.reviewed'))->send();
            });
    }

    public static function terminate(string $class = Action::class): Action|TableAction
    {
        return $class::make('terminate')
            ->label(VendorResource::label('actions.terminate'))
            ->icon('heroicon-o-no-symbol')
            ->color('danger')
            ->requiresConfirmation()
            ->modalDescription(VendorResource::label('help.terminate'))
            ->visible(fn (Vendor $record): bool => $record->terminated_at === null)
            ->action(fn (Vendor $record) => $record->terminate());
    }

    public static function dataReturned(string $class = Action::class): Action|TableAction
    {
        return $class::make('dataReturned')
            ->label(VendorResource::label('actions.data_returned'))
            ->icon('heroicon-o-arrow-uturn-left')
            ->color('success')
            ->requiresConfirmation()
            ->visible(fn (Vendor $record): bool => $record->terminated_at !== null && $record->data_returned_at === null)
            ->action(fn (Vendor $record) => $record->confirmDataReturned());
    }
}
