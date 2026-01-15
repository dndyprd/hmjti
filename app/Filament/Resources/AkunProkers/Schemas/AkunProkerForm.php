<?php

namespace App\Filament\Resources\AkunProkers\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ColorPicker;

class AkunProkerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                TextInput::make('name')
                    ->required()
                    ->label('Nama')
                    ->maxLength(255)
                    ->placeholder('Masukkan Nama Proker/Akun')
                    ->columnSpanFull(),
                TextInput::make('email')
                    ->email()
                    ->label('Email')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan Email Akun'),
                TextInput::make('phone')
                    ->label('Kontak Person')
                    ->tel()
                    ->maxLength(25)
                    ->placeholder('Masukkan Kontak Person Pemegang Proker'),
                ColorPicker::make('color')
                    ->label('Warna Unik')
                    ->placeholder('Pilih Warna Unik Proker'),
                TextInput::make('password')
                    ->password()
                    ->label('Password')
                    ->placeholder('Masukkan Password')
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (string $operation): bool => $operation === 'create'),
                Hidden::make('role')
                    ->default('proker'),
            ]);
    }
}
