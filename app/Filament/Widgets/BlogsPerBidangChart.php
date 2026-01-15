<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Bidang;

class BlogsPerBidangChart extends ChartWidget
{
    protected static ?int $sort = 4;

    protected int | string | array $columnSpan = 1;

    public static function canView(): bool
    {
        return auth()->user()?->role === 'admin';
    }

    protected ?string $heading = 'Blogs Per Bidang Chart';

    protected function getData(): array
    {
        $data = Bidang::join('prokers', 'bidangs.id', '=', 'prokers.bidang_id')
            ->join('blogs', 'prokers.id', '=', 'blogs.proker_id')
            ->selectRaw('bidangs.name, count(blogs.id) as total')
            ->groupBy('bidangs.name')
            ->pluck('total', 'bidangs.name')
            ->toArray();
 
        $colors = [
            '#22d3ee', '#38bdf8', '#60a5fa'
        ];

        return [
            'datasets' => [
                [
                    'label' => 'Blogs',
                    'data' => array_values($data),
                    'backgroundColor' => array_slice($colors, 0, count($data)),
                ],
            ],
            'labels' => array_keys($data),
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
