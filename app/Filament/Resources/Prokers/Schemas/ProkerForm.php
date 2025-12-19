<?php

namespace App\Filament\Resources\Prokers\Schemas;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput; 
use Filament\Schemas\Schema;

class ProkerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Nama dan Slug 
                TextInput::make('name')
                    ->label('Nama Proker')
                    ->placeholder('Nama Program Kerja')
                    ->required(),
                TextInput::make('slug')
                    ->label('Singkatan / Slug')
                    ->placeholder('Singkatan Nama Program Kerja')
                    ->autocapitalize('words')
                    ->required(), 

                // Bidang
                Radio::make('bidang_id')
                    ->label('Proker Bidang')
                    ->options([
                        1 => 'Bidang 1',
                        2 => 'Bidang 2',
                        3 => 'Bidang 3',
                        4 => 'Inti',
                    ]) 
                    ->inline()
                    ->required(),
                 
                // Deskripsi 
                MarkdownEditor::make('description')
                    ->label('Deskripsi Proker') 
                    ->placeholder('Informasi dan tujuan program kerja')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}