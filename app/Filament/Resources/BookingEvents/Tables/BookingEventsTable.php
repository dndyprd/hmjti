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
            ->defaultSort('starts_at', 'desc')
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

                TextColumn::make('starts_at')
                    ->label('Mulai')
                    ->dateTime('d F Y H:i')
                    ->sortable(),

                TextColumn::make('ends_at')
                    ->label('Selesai')
                    ->dateTime('d F Y H:i')
                    ->sortable(), 

                TextColumn::make('contact_name')
                    ->label('Penanggung Jawab') 
                    ->visible(fn () => auth()->user()->role === 'admin')
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
                EditAction::make()
                    ->visible(fn ($record) => auth()->user()->role === 'admin' || $record->user_id === auth()->id()),
                DeleteAction::make()
                    ->visible(fn ($record) => auth()->user()->role === 'admin' || $record->user_id === auth()->id()),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
