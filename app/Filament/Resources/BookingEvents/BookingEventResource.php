<?php

namespace App\Filament\Resources\BookingEvents;

use App\Filament\Resources\BookingEvents\Pages\CreateBookingEvent;
use App\Filament\Resources\BookingEvents\Pages\EditBookingEvent;
use App\Filament\Resources\BookingEvents\Pages\ListBookingEvents;
use App\Filament\Resources\BookingEvents\Pages\ViewBookingEvent;
use App\Filament\Resources\BookingEvents\Schemas\BookingEventForm;
use App\Filament\Resources\BookingEvents\Schemas\BookingEventInfolist;
use App\Filament\Resources\BookingEvents\Tables\BookingEventsTable;
use App\Models\BookingEvent;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingEventResource extends Resource
{ 
    protected static string | UnitEnum | null $navigationGroup = 'Manajemen Konten';

    protected static ?string $model = BookingEvent::class;
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-calendar';
    protected static ?int $navigationSort = 1;
 
    protected static ?string $navigationLabel = 'Booking Event'; 
    protected static ?string $modelLabel = 'Booking Event'; 
    protected static ?string $pluralModelLabel = 'Booking Event'; 

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return BookingEventForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BookingEventInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BookingEventsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBookingEvents::route('/'),
            'create' => CreateBookingEvent::route('/create'),
            'view' => ViewBookingEvent::route('/{record}'),
            'edit' => EditBookingEvent::route('/{record}/edit'),
        ];
    }

    public static function canEdit(\Illuminate\Database\Eloquent\Model $record): bool
    {
        return auth()->user()->role === 'admin' || $record->user_id === auth()->id();
    }

    public static function canDelete(\Illuminate\Database\Eloquent\Model $record): bool
    {
        return auth()->user()->role === 'admin' || $record->user_id === auth()->id();
    }
}
