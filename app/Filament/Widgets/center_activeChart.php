<?php

namespace App\Filament\Widgets;

use App\Models\Question;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class center_activeChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'centerActiveChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'center_activeChart';

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
                'type' => 'donut',
                'height' => 200,
            ],
            'series' => [Question::query()->where('center_active',1)->count(),Question::query()->where('center_active',0)->count()],
            'labels' => ['نعم','لا'],
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }
}
