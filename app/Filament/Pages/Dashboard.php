<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use \Illuminate\Contracts\Support\Htmlable;

class Dashboard extends BaseDashboard
{
    protected static ?int $navigationSort = -2; 
    protected static ?string $navigationLabel = 'Dashboard'; 

    public function getTitle(): string | Htmlable
    {
        return 'Dashboard';
    }

    public function getColumns(): int | array
    {
        return 2;
    }
}
