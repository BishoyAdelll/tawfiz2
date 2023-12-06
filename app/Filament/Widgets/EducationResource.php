<?php

namespace App\Filament\Widgets;

use App\Models\Question;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class EducationResource extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'educationResource';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'EducationResource';

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
            'series' => [Question::query()->where('graduation','مؤهل متوسط')->count(),
                Question::query()->where('graduation','مؤهل فوق المتوسط')->count(),
                Question::query()->where('graduation','جامعى')->count(),
                Question::query()->where('graduation','أعلى من الجامعى')->count()],
            'labels' => ['مؤهل متوسط', 'مؤهل فوق المتوسط', 'جامعى', 'أعلى من الجامعى'],
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }
}
