<?php

namespace App\Filament\Resources\Prokers\Tables;

use Filament\Actions\BulkActionGroup; 
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn; 
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class ProkersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // PROKER BIDANG
                TextColumn::make('bidang_id')
                    ->label('Bidang')
                    ->searchable()
                    ->sortable()
                    // FORMAT ID
                    ->formatStateUsing(function ($state) {
                        $bidang = [
                            1 => 'Inti',
                            2 => 'Bidang 1',
                            3 => 'Bidang 2',
                            4 => 'Bidang 3',
                        ];
                        
                        return $bidang[$state] ?? 'Tidak Diketahui';
                    })
                    ->badge()
                    ->color(function ($state) {
                        $colors = [
                            1 => 'success',
                            2 => 'info',
                            3 => 'danger',
                            4 => 'warning',
                        ];
                        
                        return $colors[$state] ?? 'gray';
                    }),
                // NAMA PROKER
                TextColumn::make('slug')  
                    ->label('Singkatan')
                    ->searchable() 
                    ->sortable(), 
                TextColumn::make('name')
                    ->label('Nama Proker')
                    ->searchable() 
                    ->sortable(), 
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(), 
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
