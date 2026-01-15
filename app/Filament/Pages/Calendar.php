<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Actions\Action;
use App\Filament\Resources\BookingEvents\BookingEventResource;

class Calendar extends Page
{
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationLabel = 'Kalender';
    protected static ?int $navigationSort = -1;
    protected static ?string $title = 'Kalender Kegiatan';

    protected string $view = 'filament.pages.calendar';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('create_booking')
                ->label('Buat Booking')
                ->color('primary')
                ->url(BookingEventResource::getUrl('create')),
        ];
    }
}
