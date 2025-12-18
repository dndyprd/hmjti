<?php

namespace App\Filament\Resources\Prokers\Pages;

use App\Filament\Resources\Prokers\ProkerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewProker extends ViewRecord
{
    protected static string $resource = ProkerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
