<?php

namespace App\Filament\Resources\Prokers;

use App\Filament\Resources\Prokers\Pages\CreateProker;
use App\Filament\Resources\Prokers\Pages\EditProker;
use App\Filament\Resources\Prokers\Pages\ListProkers;
use App\Filament\Resources\Prokers\Pages\ViewProker;
use App\Filament\Resources\Prokers\Schemas\ProkerForm;
use App\Filament\Resources\Prokers\Schemas\ProkerInfolist;
use App\Filament\Resources\Prokers\Tables\ProkersTable;
use App\Models\Proker;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema; 
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProkerResource extends Resource
{
    protected static string | UnitEnum | null $navigationGroup = 'Struktur Organisasi';

    protected static ?string $model = Proker::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?int $navigationSort = 2;
    
    protected static ?string $navigationLabel = 'Program Kerja'; 
    protected static ?string $modelLabel = 'Program Kerja'; 
    protected static ?string $pluralModelLabel = 'Program Kerja'; 

    protected static ?string $recordTitleAttribute = 'slug';

    public static function form(Schema $schema): Schema
    {
        return ProkerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProkerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProkersTable::configure($table);
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
            'index' => ListProkers::route('/'),
            'create' => CreateProker::route('/create'),
            'view' => ViewProker::route('/{record}'),
            'edit' => EditProker::route('/{record}/edit'),
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
