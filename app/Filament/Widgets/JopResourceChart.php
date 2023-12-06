<?php

namespace App\Filament\Widgets;

use App\Models\Question;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class JopResourceChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'jopResourceChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'JopResourceChart';

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
            'series' => [Question::query()->where('job','مستوى مركزي بوزارة التضامن الاجتماعي')->count(),
                Question::query()->where('job','مدير مديرية')->count(),
                Question::query()->where('job','وكيل مديرية')->count(),
                Question::query()->where('job','مدير مركز إغاثة')->count()],
            'labels' => ['مستوى مركزي بوزارة التضامن الاجتماعي', 'مدير مديرية', 'وكيل مديرية', 'مدير مركز إغاثة'],
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }
}
