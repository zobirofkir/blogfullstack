<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("name")->required(),
                TextInput::make("email")->required()->email(),
                TextInput::make("password")->password()->required()->minLength(8),
                FileUpload::make("image")
                            ->required()
                            ->preserveFilenames()
                            ->disk('public')
                            ->directory('image'),

                Select::make("is_admin")
                            ->label('Role')
                            ->options([
                                'admin' => 'Admin',
                                'user' => 'User'
                            ])
                            ->default('user')
                            ->required(),

                Checkbox::make("is_active")->label('Is Active')
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->query(User::where('id', '!=', Auth::id()))
            ->columns([
                ImageColumn::make('image')
                        ->label('Image')
                        ->disk('public')
                        ->width(50)
                        ->height(50),
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('is_admin')->label('Role'),
                TextColumn::make('is_active')->label('Is Active'),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
