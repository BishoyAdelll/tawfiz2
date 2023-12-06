<?php

namespace App\Filament\Widgets;

use App\Models\Question;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class course_rateChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'courseRateChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'course_rateChart';

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
            'series' => [Question::query()->where('course_rate', 'جيد جدا')->count(),
                Question::query()->where('course_rate', 'جيد')->count(),
                Question::query()->where('course_rate', 'لا استطيع التحديد')->count(),
                Question::query()->where('course_rate','سيء')->count(),
                Question::query()->where('course_rate','سيء جدا')->count()],
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
