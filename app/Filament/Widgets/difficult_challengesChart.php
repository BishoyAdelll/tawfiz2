<?php

namespace App\Filament\Widgets;

use App\Models\Question;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class difficult_challengesChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'difficultChallengesChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'difficult_challengesChart';

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
            'series' => [Question::query()->where('difficult_challenges','صعبة جدا')->count(),
                Question::query()->where('difficult_challenges', 'صعبة')->count(),
                Question::query()->where('difficult_challenges',  'عادية')->count(),
                Question::query()->where('difficult_challenges', 'سهلة')->count(),
                Question::query()->where('difficult_challenges','سهلة جدا')->count()],
            'labels' => [
                'صعبة جدا',
                'صعبة',
                'عادية',
                'سهلة',
                'سهلة جدا',
            ],
                           
        
            'legend' => [
                'labels' => [
                    'fontFamily' => 'inherit',
                ],
            ],
        ];
    }
}
