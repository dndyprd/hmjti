<?php

namespace App\Filament\Resources\BookingEvents\Pages;

use App\Filament\Resources\BookingEvents\BookingEventResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBookingEvent extends CreateRecord
{
    protected static string $resource = BookingEventResource::class;
}
