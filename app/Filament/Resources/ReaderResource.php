<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReaderResource\Pages;
use App\Filament\Resources\ReaderResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Notifications\Notification;

class ReaderResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationGroup = 'Users';

    protected static ?string $label = 'Reading Buddies';
    protected static ?string $navigationLabel = 'Reading Buddies';
    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';

    protected static ?int $navigationSort = 1;

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
                Tables\Columns\TextColumn::make('profile.city.city_name')->label('City')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('profile.state.state_name')->label('State')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('profile.country.country_name')->label('Country')->searchable()->sortable()
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
            RelationManagers\ProfileRelationManager::class,
            RelationManagers\ItemusersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReaders::route('/'),
            'create' => Pages\CreateReader::route('/create'),
            'edit' => Pages\EditReader::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with('usertype')->whereHas('usertype', function($query){
            $query->where('item_type_id', 12)->where('item_id', 2);
        });
    }
}
