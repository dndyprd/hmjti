<?php

namespace App\Filament\Widgets;

use App\Models\BookingEvent;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use App\Filament\Resources\BookingEvents\BookingEventResource;

class CalendarWidget extends FullCalendarWidget
{
    /**
     * Sembunyikan dari Dashboard
     */
    public static function canView(): bool
    {
        return false;
    }

    /**
     * Konfigurasi Tampilan Kalender
     */
    public function config(): array
    {
        return [
            'firstDay' => 1,
            'headerToolbar' => [
                'left' => 'prev,next today',
                'center' => 'title',
                'right' => 'dayGridMonth,listWeek',
            ],
            'buttonText' => [
                'today' => 'Hari Ini',
                'month' => 'Bulan',
                'week' => 'Minggu',
                'day' => 'Hari',
                'list' => 'Minggu',
            ],
            'eventDisplay' => 'block', 
            'height' => 'auto', 
            'displayEventTime' => false,
        ];
    }
 
    public function fetchEvents(array $fetchInfo): array
    {
        return BookingEvent::query()
            ->with('user')
            ->where('starts_at', '<=', $fetchInfo['end'])
            ->where('ends_at', '>=', $fetchInfo['start'])
            ->get()
            ->map(function (BookingEvent $event) {
                return [
                    'id' => $event->id,
                    'title' => $event->title,
                    'start' => $event->starts_at,
                    'end' => $event->ends_at,
                    'url' => BookingEventResource::getUrl('view', ['record' => $event]),
                    'color' => $event->user?->color ?? '#3b82f6',
                ];
            })
            ->toArray();
    }

    protected function getHeaderActions(): array
    {
        return [];
    }

    public function getFormSchema(): array
    {
        return [];
    }
}
