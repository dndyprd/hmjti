<?php

namespace App\Filament\Resources\AkunProkers\Pages;

use App\Filament\Resources\AkunProkers\AkunProkerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAkunProker extends ViewRecord
{
    protected static string $resource = AkunProkerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
