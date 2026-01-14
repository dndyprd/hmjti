<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Proker;

class BlogsChart extends ChartWidget
{
    protected static ?int $sort = 3;

    protected int | string | array $columnSpan = 1;

    protected ?string $heading = 'Blogs Per Proker';

    protected function getData(): array
    {
        $data = Proker::withCount(['blogs' => function ($query) {
                $query->where('status', 'published');
            }])
            ->get()
            ->filter(fn ($proker) => $proker->blogs_count > 0)
            ->mapWithKeys(function ($proker) { 
                return [strtoupper($proker->slug) => $proker->blogs_count];
            })
            ->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Blogs Published',
                    'data' => array_values($data),
                    'backgroundColor' => 'rgba(74, 131, 222, 0.4)',
                    'borderColor' => '#4aa5deff',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => array_keys($data),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
