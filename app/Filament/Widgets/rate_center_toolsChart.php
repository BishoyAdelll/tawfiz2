<?php

namespace App\Filament\Widgets;

use App\Models\Question;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class rate_center_toolsChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'rateCenterToolsChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'rate_center_toolsChart';

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
            'series' => [Question::query()->where('rate_center_tools', 'جيد جدا')->count(),
                Question::query()->where('rate_center_tools', 'جيد')->count(),
                Question::query()->where('rate_center_tools', 'لا استطيع التحديد')->count(),
                Question::query()->where('rate_center_tools','سيء')->count(),
                Question::query()->where('rate_center_tools','سيء جدا')->count()],
            'labels' => [
                'جيد جدا',
                'جيد',
                'لا استطيع التحديد',
                'سيء',
                'سيء جدا',
            ],
                           
        
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }
}
