<?php

namespace App\Filament\Widgets;

use App\Models\Proker;
use Filament\Widgets\ChartWidget;

class BlogProkerChart extends ChartWidget
{
    protected ?string $heading = 'Total Blog per Program Kerja';
    protected static ?int $sort = 3;
    protected ?string $maxHeight = '300px';

    protected function getData(): array
    { 
        $data = Proker::has('blogs')
            ->withCount('blogs')
            ->get();

        return [ 
            'labels' => $data->pluck('slug')->toArray(),
            
            'datasets' => [
                [
                    'label' => 'Jumlah Blog', 
                    'data' => $data->pluck('blogs_count')->toArray(), 
                    'backgroundColor' => [ 
                        '#ec4899', // Pink
                        '#8b5cf6', // Ungu 
                        '#6366f1', // Indigo
                        '#1d4ed8', // Biru  
                        '#06b6d4', // Cyan 
                        '#14b8a6', // Teal
                        '#10b981', // Hijau 
                        '#f97316', // Oranye  
                        '#ef4444', // Merah 
                    ],
                    'hoverOffset' => 8
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}