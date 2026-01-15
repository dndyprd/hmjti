<?php

namespace App\Filament\Resources\AkunProkers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColorColumn;
class AkunProkersTable
{
    public static function configure(Table $table): Table
    {
        return $table 
            ->defaultSort('name', 'asc')
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('phone')
                    ->label('Kontak Person')
                    ->searchable(),
                ColorColumn::make('color')
                    ->copyable()
                    ->copyMessage('Copied!')
                    ->copyMessageDuration(1500)
                    ->label('Warna Unik')
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
