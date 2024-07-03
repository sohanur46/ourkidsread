<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChildResource\Pages;
use App\Filament\Resources\ChildResource\RelationManagers;
use App\Models\Child;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ChildResource extends Resource
{
    protected static ?string $model = Child::class;

    protected static ?string $recordTitleAttribute = 'child_name_first';

    protected static ?string $navigationGroup = 'Users';

    protected static ?string $label = 'Kids';
    protected static ?string $navigationLabel = 'Kids';

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([                
                Forms\Components\TextInput::make('child_name_first')
                    ->label('First name')
                    ->maxLength(128),
                Forms\Components\TextInput::make('child_name_last')
                    ->label('Last name')
                    ->maxLength(128),
                Forms\Components\TextInput::make('child_grade')
                    ->label('Grade')
                    ->numeric(),
                Forms\Components\TextInput::make('child_school')
                    ->required()
                    ->label('School')
                    ->maxLength(256),
                Forms\Components\Select::make('user_id')
                    ->relationship('parent', 'user_name_first')
                    ->searchable()
                    ->label('Parent')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([                
                Tables\Columns\TextColumn::make('child_name_first')
                    ->label('First name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('child_name_last')
                    ->label('Last name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('child_grade')
                    ->numeric()
                    ->label('Grade')
                    ->sortable(),
                Tables\Columns\TextColumn::make('child_school')
                    ->label('School')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parent.user_name_first')
                    ->label('Parent')
                    ->sortable(),
            ])
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
            RelationManagers\AvailabilitiesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListChildren::route('/'),
            'create' => Pages\CreateChild::route('/create'),
            'edit' => Pages\EditChild::route('/{record}/edit'),
        ];
    }
    // public static function getEloquentQuery(): Builder
    // {
    //     dd(parent::getEloquentQuery()->first()->availabilities()->first()->availability);
    // }
}
