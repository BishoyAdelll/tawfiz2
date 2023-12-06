<?php

namespace App\Filament\Widgets;

use App\Models\Governorate;
use App\Models\Question;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class governorateChart extends ApexChartWidget
{
    public $test;
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'governorateChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'governorateChart';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {

        $data=Governorate::all();
        return [
            'chart' => [
                'type' => 'bar',
                'height' => 200,

            ],
            'series' => [
                [
                    'name' => 'governorateChart',
                    'data' => [

                        Question::query()->where('governorate',1)->count(),
                        Question::query()->where('governorate',2)->count(),
                        Question::query()->where('governorate',3)->count(),
                        Question::query()->where('governorate',4)->count(),
                        Question::query()->where('governorate',5)->count(),
                        Question::query()->where('governorate',6)->count(),
                        Question::query()->where('governorate',7)->count(),
                        Question::query()->where('governorate',8)->count(),
                        Question::query()->where('governorate',9)->count(),
                        Question::query()->where('governorate',10)->count(),
                        Question::query()->where('governorate',11)->count(),
                        Question::query()->where('governorate',12)->count(),
                        Question::query()->where('governorate',13)->count(),
                        Question::query()->where('governorate',14)->count(),
                        Question::query()->where('governorate',15)->count(),
                        Question::query()->where('governorate',16)->count(),
                        Question::query()->where('governorate',17)->count(),
                        Question::query()->where('governorate',18)->count(),
                        Question::query()->where('governorate',19)->count(),
                        Question::query()->where('governorate',20)->count(),
                        Question::query()->where('governorate',21)->count(),
                        Question::query()->where('governorate',22)->count(),
                        Question::query()->where('governorate',23)->count(),
                        Question::query()->where('governorate',24)->count(),
                        Question::query()->where('governorate',25)->count(),
                        Question::query()->where('governorate',26)->count(),
                        Question::query()->where('governorate',27)->count(),
                        Question::query()->where('governorate',28)->count(),
                        Question::query()->where('governorate',29)->count(),
                    ],
                ],
            ],
            'xaxis' => [
                'categories' => $data->map(fn (Governorate $value) => $value->name),
                'labels' => [
                    'style' => [
                        'fontFamily' => 'inherit',
                    ],
                ],
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'fontFamily' => 'inherit',
                    ],
                ],
            ],
            'colors' => ['#f59e0b'],
        ];
    }
}
