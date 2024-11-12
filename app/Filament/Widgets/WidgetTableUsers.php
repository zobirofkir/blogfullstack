<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Support\Facades\Auth;

class WidgetTableUsers extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                User::where('id', '!=', Auth::id())
            )
            ->columns([
                ImageColumn::make('image')
                        ->label('Image')
                        ->disk('public')
                        ->width(50)
                        ->height(50),
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('is_admin')->label('Role'),
            ]);
    }

    public function lines()
    {
        return "full";
    }
}
