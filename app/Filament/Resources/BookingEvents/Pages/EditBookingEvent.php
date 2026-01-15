<?php

namespace App\Filament\Resources\BookingEvents\Pages;

use App\Filament\Resources\BookingEvents\BookingEventResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditBookingEvent extends EditRecord
{
    protected static string $resource = BookingEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
