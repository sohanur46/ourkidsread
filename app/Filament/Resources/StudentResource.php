<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Notifications\Notification;

class StudentResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $recordTitleAttribute = 'user_name_first';

    protected static ?string $navigationGroup = 'Users';

    protected static ?string $label = 'Parents';
    protected static ?string $navigationLabel = 'Parents';

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('User')
                    ->schema([
                        Forms\Components\TextInput::make('email')->label('Email Address')->required(),
                        Forms\Components\TextInput::make('user_name_first')->label('First Name')->required(),
                        Forms\Components\TextInput::make('user_name_last')->label('Last Name')->required(),
                        Forms\Components\TextInput::make('name')->label('User Name')->required(),
                        Forms\Components\TextInput::make('password')->label('User Password'),
                        Forms\Components\TextInput::make('cell_phone')->label('Cell phone'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_name_first')->searchable()->sortable()->label('First Name'),
                Tables\Columns\TextColumn::make('user_name_last')->searchable()->sortable()->label('Last Name'),
                Tables\Columns\TextColumn::make('email')->label('Email address')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('cell_phone')->label('Phone')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('city')->label('City')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('state')->label('State')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('country')->label('Country')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('parent_fname')->label('Parent name')->searchable()->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->groupedBulkActions([
                Tables\Actions\DeleteBulkAction::make()                
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ProfileRelationManager::class            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with('usertype')->whereHas('usertype', function($query){
            $query->where('item_type_id', 12)->where('item_id', '!=', 2);
        });
    }
}