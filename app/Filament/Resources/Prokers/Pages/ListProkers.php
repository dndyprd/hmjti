<?php

namespace App\Filament\Resources\Prokers\Pages;

use App\Filament\Resources\Prokers\ProkerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProkers extends ListRecords
{
    protected static string $resource = ProkerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
