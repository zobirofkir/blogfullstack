<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class WidgetTableCategories extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Category::query()
            )
            ->columns([
                ImageColumn::make('image')
                            ->label('Image')
                            ->disk('public')
                            ->width(50)
                            ->height(50),
                TextColumn::make('title'),
                TextColumn::make('description'),
            ]);
    }
}
