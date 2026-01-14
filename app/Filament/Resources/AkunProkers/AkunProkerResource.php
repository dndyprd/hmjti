<?php

namespace App\Filament\Resources\AkunProkers;

use App\Filament\Resources\AkunProkers\Pages\CreateAkunProker;
use App\Filament\Resources\AkunProkers\Pages\EditAkunProker;
use App\Filament\Resources\AkunProkers\Pages\ListAkunProkers;
use App\Filament\Resources\AkunProkers\Pages\ViewAkunProker;
use App\Filament\Resources\AkunProkers\Schemas\AkunProkerForm;
use App\Filament\Resources\AkunProkers\Schemas\AkunProkerInfolist;
use App\Filament\Resources\AkunProkers\Tables\AkunProkersTable;
use App\Models\User;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class AkunProkerResource extends Resource
{
    protected static ?string $model = User::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('role', 'proker');  
    }

    public static function form(Schema $schema): Schema
    {
        return AkunProkerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AkunProkerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AkunProkersTable::configure($table);
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
            'index' => ListAkunProkers::route('/'),
            'create' => CreateAkunProker::route('/create'),
            'view' => ViewAkunProker::route('/{record}'),
            'edit' => EditAkunProker::route('/{record}/edit'),
        ];
    }
}
