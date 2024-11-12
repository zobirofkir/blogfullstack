<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class WidgetTableBlogs extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Blog::query()
            )
            ->columns([
                ImageColumn::make('images')
                        ->label('Image')
                        ->disk('public')
                        ->width(50)
                        ->height(50),
                TextColumn::make("title"),
                TextColumn::make("description")->limit(50),
                TextColumn::make('category.title')->label('Category'),
                TextColumn::make('tag.title')->label('Tag'),
            ]);
    }
}
