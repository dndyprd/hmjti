<?php

namespace App\Filament\Resources\BookingEvents\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\SelectFilter;

class BookingEventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('event_date', 'desc')
            ->modifyQueryUsing(function (Builder $query) {
                if (auth()->user()->role !== 'admin') {
                    $query->where('user_id', auth()->id());
                }
            })
            ->columns([
                TextColumn::make('title')
                    ->label('Nama Kegiatan')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('user.name')
                    ->label('Dibuat Oleh')
                    ->sortable()
                    ->visible(fn () => auth()->user()->role === 'admin'),

                TextColumn::make('event_date')
                    ->label('Tanggal')
                    ->date('d F Y')
                    ->sortable(),

                TextColumn::make('start_time')
                    ->label('Jam Mulai')
                    ->time('H:i'), 

                TextColumn::make('contact_name')
                    ->label('Penanggung Jawab')
                    ->searchable(),

                TextColumn::make('contact_phone')
                    ->label('Kontak')
                    ->copyable(),
            ])
            ->filters([
                SelectFilter::make('user_id')
                    ->label('Pembuat Event')
                    ->relationship('user', 'name')
                    ->visible(fn () => auth()->user()->role === 'admin')
                    ->searchable()
                    ->preload(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
