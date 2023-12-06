<?php

namespace App\Filament\Widgets;

use App\Models\Question;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class center_durationChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'centerDurationChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'center_durationChart';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        return [
            'chart' => [
                'type' => 'pie',
                'height' => 200,
            ],
            'series' => [Question::query()->where('center_duration','شهرية')->count(),
                Question::query()->where('center_duration','ربع سنوية')->count(),
                Question::query()->where('center_duration', 'نص سنوية')->count(),
                Question::query()->where('center_duration','سنوية')->count()],
            'labels' => ['شهرية',
            'ربع سنوية',
            'نص سنوية',
            'سنوية',],
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }
}
