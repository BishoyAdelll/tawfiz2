<?php

namespace App\Filament\Widgets;

use App\Models\Question;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class center_visionChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'centerVisionChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'center_visionChart';

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
            'series' => [Question::query()->where('center_vision','1')->count(),Question::query()->where('center_vision','0')->count()],
            'labels' => ['نعم','لا'],
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }
}
