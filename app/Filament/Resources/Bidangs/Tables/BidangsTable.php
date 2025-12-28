<?php

namespace App\Filament\Resources\Bidangs\Tables;

use Filament\Actions\BulkActionGroup; 
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class BidangsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // PROKER BIDANG
                TextColumn::make('id')
                    ->label('Bidang')
                    ->searchable()
                    ->sortable()
                    // FORMAT ID
                    ->formatStateUsing(function ($state) {
                        $bidang = [
                            0 => 'Inti',
                            1 => 'Bidang 1',
                            2 => 'Bidang 2',
                            3 => 'Bidang 3',
                        ];
                        
                        return $bidang[$state] ?? 'Tidak Diketahui';
                    })
                    ->badge()
                    ->color(function ($state) {
                        $colors = [
                            0 => 'success',
                            1 => 'info',
                            2 => 'danger',
                            3 => 'warning',
                        ];
                        
                        return $colors[$state] ?? 'gray';
                    }),
                // NAMA PROKER
                TextColumn::make('name')  
                    ->label('Nama Bidang')
                    ->searchable() 
                    ->sortable(), 
                // TOTAL PROKER 
                TextColumn::make('total_proker')
                    ->label('Total Proker')
                    ->sortable()
                    ->getStateUsing(function ($record) {
                        // Hitung langsung dari relationship
                        return $record->prokers()->count();
                    })
                    ->formatStateUsing(fn ($state): string => $state . ' Proker')
                    ->badge()
                    ->color('gray'),
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
