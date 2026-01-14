<?php

namespace App\Filament\Resources\Bidangs;

use App\Filament\Resources\Bidangs\Pages\CreateBidang;
use App\Filament\Resources\Bidangs\Pages\EditBidang;
use App\Filament\Resources\Bidangs\Pages\ListBidangs;
use App\Filament\Resources\Bidangs\Pages\ViewBidang;
use App\Filament\Resources\Bidangs\Schemas\BidangForm;
use App\Filament\Resources\Bidangs\Schemas\BidangInfolist;
use App\Filament\Resources\Bidangs\Tables\BidangsTable;
use App\Models\Bidang;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema; 
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BidangResource extends Resource
{
    protected static string | UnitEnum | null $navigationGroup = 'Struktur Organisasi';

    protected static ?string $model = Bidang::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-user-group';
    protected static ?int $navigationSort = 3;

    protected static ?string $navigationLabel = 'Bidang'; 
    protected static ?string $modelLabel = 'Bidang'; 
    protected static ?string $pluralModelLabel = 'Bidang'; 

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return BidangForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BidangInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BidangsTable::configure($table);
    }
    
    public static function canViewAny(): bool
    {
        return auth()->user()->role === 'admin';
    }

    public static function canCreate(): bool
    {
        return auth()->user()->role === 'admin';
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBidangs::route('/'),
            'create' => CreateBidang::route('/create'),
            'view' => ViewBidang::route('/{record}'),
            'edit' => EditBidang::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
