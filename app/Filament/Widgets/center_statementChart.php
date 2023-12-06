<?php

namespace App\Filament\Widgets;

use App\Models\Question;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class center_statementChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'centerStatementChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'center_statement.chart';

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
            'series' => [Question::query()->where('center_statement','1')->count(),Question::query()->where('center_statement','0')->count()],
            'labels' => ['نعم','لا'],
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }
}
