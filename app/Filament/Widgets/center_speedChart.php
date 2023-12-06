<?php

namespace App\Filament\Widgets;

use App\Models\Question;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class center_speedChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'centerSpeedChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'center_speedChart';

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
            'series' => [Question::query()->where('center_speed','قلة الإمكانيات المتاحة')->count(),
                Question::query()->where('center_speed','عدم توفر وسائل الاتصال المناسبة')->count(),
                Question::query()->where('center_speed', 'عدم توفر القدرة المالية')->count(),
                Question::query()->where('center_speed','قلة الخبرة المتاحة')->count(),
                Question::query()->where('center_speed','اخرى – تذكر')->count(),
            ],
            'labels' => ['قلة الإمكانيات المتاحة',
            'عدم توفر وسائل الاتصال المناسبة',
            'عدم توفر القدرة المالية',
            'قلة الخبرة المتاحة',
            'اخرى – تذكر',],
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }
}
