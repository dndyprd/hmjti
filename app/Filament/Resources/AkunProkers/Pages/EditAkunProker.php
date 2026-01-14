<?php

namespace App\Filament\Resources\AkunProkers\Pages;

use App\Filament\Resources\AkunProkers\AkunProkerResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAkunProker extends EditRecord
{
    protected static string $resource = AkunProkerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
