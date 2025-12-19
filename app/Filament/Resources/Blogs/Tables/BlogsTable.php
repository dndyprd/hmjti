<?php

namespace App\Filament\Resources\Blogs\Tables;

use App\Models\Blog;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction; 
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter; 
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class BlogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('prokers.slug')
                    ->label('Program Kerja')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info'), 
                TextColumn::make('title')  
                    ->label('Judul Kegiatan')
                    ->searchable()  
                    ->limit(38),  
                TextColumn::make('start_date')
                    ->label('Tanggal Kegiatan')
                    ->sortable()
                    ->date('j M Y'), 
                TextColumn::make('status')
                    ->label('Status') 
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'draft' => 'warning',
                        'published' => 'success',
                        'archived' => 'danger', 
                    }),
            ])
            ->filters([  
                SelectFilter::make('proker_id')
                    ->label('Program Kerja')
                            ->relationship('prokers', 'slug')
                            ->searchable()
                            ->preload(),
                        
                    SelectFilter::make('year')
                        ->label('Tahun')
                        ->options(function () { 
                            return Blog::query()
                                ->selectRaw('YEAR(start_date) as year')
                                ->distinct()
                                ->orderBy('year', 'desc')
                                ->pluck('year', 'year')
                                ->toArray();
                        })
                        ->query(function (Builder $query, array $data) {
                            if (!empty($data['value'])) {
                                $query->whereYear('date', $data['value']);
                            }
                }),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ])
            ->defaultPaginationPageOption(15) 
            ->defaultSort('start_date', 'desc');
    }
}
