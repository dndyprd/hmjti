<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Blog; 
use App\Models\Proker;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Blog Publish', Blog::where('status', 'published')->count())
                ->description('Blog yang telah di publikasi')
                ->descriptionIcon('heroicon-m-document-check')
                ->color('info'),  

            Stat::make('Total Event Tahun Ini', Blog::where('status', 'published')->whereYear('start_date', now()->year)->count())
                ->description('Event yang berjalan pada tahun ' . now()->year)
                ->descriptionIcon('heroicon-m-calendar')
                ->color('success'),

            Stat::make('Program Kerja', Proker::count()) 
                ->description('Proker di HMJ Teknologi Informasi')
                ->descriptionIcon('heroicon-m-users')
                ->color('info'),
        ];
    }
}
