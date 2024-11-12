<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class WidgetOverView extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::count())
            ->description('Users ')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([1, 10, 5, 2, 20, 30, 45])
            ->color('success'),

            Stat::make('Blogs', Blog::count())
                ->description('Blogs ')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([1, 10, 5, 2, 20, 30, 45])
                ->color('success'),

            Stat::make('Categories', Category::count())
                ->description('Categories ')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([1, 10, 5, 2, 20, 30, 45])
                ->color('success'),

            Stat::make('Tags', Tag::count())
                ->description('Tags ')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([1, 10, 5, 2, 20, 30, 45])
                ->color('success'),

        ];
    }
}
