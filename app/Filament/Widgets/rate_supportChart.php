<?php

namespace App\Filament\Widgets;

use App\Models\Question;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class rate_supportChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'rateSupportChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'rate_supportChart';

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
            'series' => [Question::query()->where('rate_support', 'جيد جدا')->count(),
                Question::query()->where('rate_support', 'جيد')->count(),
                Question::query()->where('rate_support', 'لا استطيع التحديد')->count(),
                Question::query()->where('rate_support','سيء')->count(),
                Question::query()->where('rate_support','سيء جدا')->count()],
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
