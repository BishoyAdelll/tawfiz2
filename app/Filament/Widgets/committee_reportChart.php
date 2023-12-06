<?php

namespace App\Filament\Widgets;

use App\Models\Question;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class committee_reportChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'committeeReportChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'committee_reportChart';

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
            'series' => [Question::query()->where('committee_report', 'جيد جدا')->count(),
                Question::query()->where('committee_report', 'جيد')->count(),
                Question::query()->where('committee_report', 'لا استطيع التحديد')->count(),
                Question::query()->where('committee_report','سيء')->count(),
                Question::query()->where('committee_report','سيء جدا')->count()],
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
