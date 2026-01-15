<?php

namespace App\Filament\Resources\BookingEvents\Pages;

use App\Filament\Resources\BookingEvents\BookingEventResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBookingEvents extends ListRecords
{
    protected static string $resource = BookingEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
