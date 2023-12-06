<?php

namespace App\Filament\Widgets;

// use App\Livewire\Question;
use App\Models\Question ;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class training_courses_supportChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'trainingCoursesSupportChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'training_courses_supportChart';

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
            'series' => [Question::query()->where('training_courses_support','1')->count(),Question::query()->where('training_courses_support','0')->count()],
            'labels' => ['نعم','لا'],
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }
}
