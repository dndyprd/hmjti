<?php

namespace App\Filament\Resources\BookingEvents\Schemas;

use App\Models\BookingEvent;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BookingEventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Nama Kegiatan')
                    ->placeholder('Masukkan Nama Kegiatan')
                    ->required()
                    ->columnSpanFull(),

                DateTimePicker::make('starts_at')
                    ->label('Starts at')
                    ->placeholder('dd/mm/yyyy 00:00')
                    ->required()
                    ->native(false)
                    ->displayFormat('d/m/Y H:i')
                    ->seconds(false),
 
                DateTimePicker::make('ends_at')
                    ->label('Ends at')
                    ->placeholder('dd/mm/yyyy 00:00')
                    ->required()
                    ->after('starts_at')
                    ->native(false)
                    ->displayFormat('d/m/Y H:i')
                    ->seconds(false),

                Grid::make(3)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('location')
                            ->label('Lokasi Kegiatan')
                            ->placeholder('Masukkan Lokasi Kegiatan'),

                        TextInput::make('contact_phone')
                            ->label('Kontak Person')
                            ->placeholder('Masukkan No Telp Anda')
                            ->tel()
                            ->default(fn () => auth('web')->user()?->phone ?? null)
                            ->required(),

                        TextInput::make('contact_name')
                            ->label('Penanggung Jawab')
                            ->placeholder('Masukkan Nama Anda')
                            ->required(), 
                    ]), 

                Textarea::make('description')
                    ->label('Description')
                    ->placeholder('Masukkan Deskripsi Kegiatan')
                    ->rows(4)
                    ->columnSpanFull(),

                Hidden::make('user_id')
                    ->default(fn () => auth('web')->id()),
            ]);
    }
}
