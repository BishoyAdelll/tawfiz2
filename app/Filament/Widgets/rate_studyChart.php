<?php

namespace App\Filament\Widgets;

use App\Models\Question;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class rate_studyChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'rateStudyChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'rate_studyChart';

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
            'series' => [Question::query()->where('rate_study', 'جيد جدا')->count(),
                Question::query()->where('rate_study', 'جيد')->count(),
                Question::query()->where('rate_study', 'لا استطيع التحديد')->count(),
                Question::query()->where('rate_study','سيء')->count(),
                Question::query()->where('rate_study','سيء جدا')->count()],
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
