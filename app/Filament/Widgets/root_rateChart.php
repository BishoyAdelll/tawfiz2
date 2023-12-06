<?php

namespace App\Filament\Widgets;

use App\Models\Question;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class root_rateChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'rootRateChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'root_rateChart';

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
            'series' => [Question::query()->where('root_rate', 'جيد جدا')->count(),
                Question::query()->where('root_rate', 'جيد')->count(),
                Question::query()->where('root_rate', 'لا استطيع التحديد')->count(),
                Question::query()->where('root_rate','سيء')->count(),
                Question::query()->where('root_rate','سيء جدا')->count()],
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
