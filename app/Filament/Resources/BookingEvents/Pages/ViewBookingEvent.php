<?php

namespace App\Filament\Resources\BookingEvents\Pages;

use App\Filament\Resources\BookingEvents\BookingEventResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBookingEvent extends ViewRecord
{
    protected static string $resource = BookingEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
