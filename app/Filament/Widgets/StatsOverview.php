<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Blog; 
use App\Models\Bidang;
use App\Models\Proker;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        $stats = [];

        $stats[] = Stat::make('Total Event Tahun Ini', Blog::where('status', 'published')->whereYear('start_date', now()->year)->count())
            ->description('Event yang berjalan pada tahun ' . now()->year)
            ->descriptionIcon('heroicon-m-calendar')
            ->color('info');

        // ADMIN ONLY STATS
        if (auth()->user()?->role === 'admin') {
            $stats[] = Stat::make('Total Blog Publish', Blog::where('status', 'published')->count())
                ->description('Blog yang telah di publikasi')
                ->descriptionIcon('heroicon-m-document-check')
                ->color('success');
        } else if (auth()->user()?->role === 'proker') {
            $stats[] = Stat::make('Bidang', Bidang::count()) 
                ->description('Bidang di HMJ Teknologi Informasi')
                ->descriptionIcon('heroicon-m-users')
                ->color('success');
        }

        // ALL STATS  
        $stats[] = Stat::make('Program Kerja', Proker::count()) 
            ->description('Proker di HMJ Teknologi Informasi')
            ->descriptionIcon('heroicon-m-users')
            ->color('info');

        return $stats;
    }
}
