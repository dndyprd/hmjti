<?php

namespace App\Filament\Widgets;

use App\Models\Bidang;
use App\Models\Blog;
use App\Models\Proker;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardWidget extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {  

        return [ 
            Stat::make('Total Blog', Blog::count())
                ->description('Blog yang sudah dipublikasi')
                ->descriptionIcon('heroicon-m-document-text')   
                ->color('success'),

            Stat::make('Program Kerja', Proker::count())
                ->description('Total kegiatan HMJ')
                ->descriptionIcon('heroicon-m-clipboard-document-list')
                ->color('info'),

            Stat::make('Jumlah Bidang', Bidang::count())
                ->description('Struktur organisasi aktif')
                ->descriptionIcon('heroicon-m-users')
                ->color('danger'),
        ]; 
    }
}