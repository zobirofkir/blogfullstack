<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\ChartWidget;

class WidgetStateChartUser extends ChartWidget
{
    protected static ?string $heading = 'Users';
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $monthlyCounts = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $data = array_fill(1, 12, 0);
        foreach ($monthlyCounts as $month => $count) {
            $data[$month] = $count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Users Chart',
                    'data' => array_values($data),
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
