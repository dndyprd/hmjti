<?php

namespace App\Filament\Widgets;

use Illuminate\Support\Facades\DB;
use Filament\Widgets\ChartWidget;

class BlogBidangChart extends ChartWidget
{
    protected ?string $heading = 'Total Blog per Bidang'; 
    protected static ?int $sort = 4;
    protected ?string $maxHeight = '300px';

    protected function getData(): array
    { 
        $stats = DB::table('bidangs')
            ->leftJoin('prokers', 'bidangs.id', '=', 'prokers.bidang_id')
            ->leftJoin('blogs', 'prokers.id', '=', 'blogs.proker_id')
            ->select('bidangs.name', DB::raw('count(blogs.id) as total_blogs'))
            ->groupBy('bidangs.id', 'bidangs.name')
            ->get();

        return [ 
            'labels' => $stats->pluck('name')->toArray(), 
            'datasets' => [
                [
                    'label' => 'Jumlah Blog',
                    'data' => $stats->pluck('total_blogs')->toArray(),
                    'backgroundColor' => [  
                        '#1d4ed8', // Biru   
                        '#e6cc00', // Oranye
                        '#ef4444', // Merah 
                        '#10b981', // Hijau  
                    ],
                    'hoverOffset' => 5
                ],
            ], 
        ];
    }

    protected function getType(): string
    { 
        return 'doughnut';
    }
}