<?php

namespace App\Filament\Resources\Bidangs\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BidangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Bidang')
                    ->required(), 
                TextInput::make('number')
                    ->label('Nomor Bidang'),
                Textarea::make('description')
                    ->label('Deskripsi Bidang')
                    ->rows(10)
                    ->required(), 
            ]);
    }
}
