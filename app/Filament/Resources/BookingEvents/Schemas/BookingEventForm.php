<?php

namespace App\Filament\Resources\BookingEvents\Schemas;

use App\Models\BookingEvent;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Hidden; 
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker; 
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
                    ->required(),
                
                TextInput::make('location')
                    ->label('Lokasi Kegiatan')
                    ->placeholder('Masukkan Lokasi Kegiatan')
                    ->required(),

                Textarea::make('description')
                    ->label('Deskripsi Kegiatan')
                    ->placeholder('Masukkan Deskripsi Kegiatan')
                    ->rows(3)
                    ->columnSpanFull(),

                DatePicker::make('event_date')
                    ->label('Tanggal Kegiatan')
                    ->placeholder('Pilih Tanggal')
                    ->required()
                    ->unique('calendar_bookings', 'event_date', ignoreRecord: true)
                    ->native(false)
                    ->displayFormat('d F Y'), 

                Grid::make(2)
                    ->schema([
                        TimePicker::make('start_time')
                            ->label('Jam Mulai')
                            ->placeholder('00:00')
                            ->seconds(false),

                        TimePicker::make('end_time')
                            ->label('Jam Selesai')
                            ->placeholder('00:00')
                            ->seconds(false),
                    ]),
                  
                
                TextInput::make('contact_phone')
                    ->label('Kontak Person')
                    ->placeholder('Masukkan No Telp Anda')
                    ->tel()
                    ->default(fn () => auth()->user()?->phone)
                    ->required(), 

                TextInput::make('contact_name')
                    ->label('Penanggung Jawab')
                    ->placeholder('Masukkan Nama Anda')
                    ->required(), 

                Hidden::make('user_id')
                    ->default(fn () => auth()->id()),
            ]);
    }
}
