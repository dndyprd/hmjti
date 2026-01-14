<?php

namespace App\Filament\Resources\AkunProkers\Pages;

use App\Filament\Resources\AkunProkers\AkunProkerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAkunProkers extends ListRecords
{
    protected static string $resource = AkunProkerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
