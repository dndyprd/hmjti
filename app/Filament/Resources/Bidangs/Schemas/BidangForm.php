<?php

namespace App\Filament\Resources\Bidangs\Schemas;

use Filament\Forms\Components\MarkdownEditor;
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
                    ->placeholder('Nama bidang')
                    ->required(), 
                TextInput::make('number')
                    ->label('Nomor Bidang')
                    ->placeholder('Nomor unik bidang'),
                MarkdownEditor::make('description')
                    ->label('Deskripsi Bidang')
                    ->placeholder('Informasi dan tujuan dari bidang tersebut') 
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
