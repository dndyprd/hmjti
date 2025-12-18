<?php

namespace App\Filament\Resources\Prokers\Schemas;
 
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
                    ->required(),
                TextInput::make('slug')
                    ->label('Singkatan / Slug')
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
                    ->descriptions([
                        1 => 'Penalaran dan Keilmuan',
                        2 => 'Minat dan Bakat',
                        3 => 'Pengabdian Masyarakat dan Kesejahteraan Mahasiswa',
                        4 => 'Himpunan Mahasiswa Jurusan Teknologi Informasi',
                    ])
                    ->required(),
                 
                // Deskripsi
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(10)
                    ->required(),
            ]);
    }
}