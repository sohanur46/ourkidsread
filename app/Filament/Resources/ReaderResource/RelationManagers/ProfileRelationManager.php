<?php

namespace App\Filament\Resources\ReaderResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfileRelationManager extends RelationManager
{
    protected static string $relationship = 'profile';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('city_id')
                    ->relationship('city', 'city_name')
                    ->searchable()
                    ->label('City')
                    ->required(),
                Forms\Components\Select::make('state_id')
                    ->relationship('state', 'state_name')
                    ->searchable()
                    ->label('State')
                    ->required(),
                Forms\Components\Select::make('employer_id')
                    ->relationship('employer', 'employer_name')
                    ->searchable()
                    ->label('Employer')
                    ->required(),

                Forms\Components\Select::make('country_id')
                    ->relationship('country', 'country_name')
                    ->searchable()
                    ->label('Country')
                    ->required(),
                Forms\Components\TextInput::make('user_other_activities')
                    ->label('Other activities')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('user_profile_address_zip')
                    ->label('Zip address')
                    ->required()
                    ->maxLength(255),
                    
                Forms\Components\TextInput::make('user_profile_address_01')
                    ->label('Address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('city_name')
                    ->label('City name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('user_profile_id')
            ->columns([
                Tables\Columns\TextColumn::make('city.city_name')->searchable()->sortable()->label('City'),
                Tables\Columns\TextColumn::make('employer.employer_name')->searchable()->sortable()->label('Employer'),
                Tables\Columns\TextColumn::make('country.country_name')->searchable()->sortable()->label('Country'),
                Tables\Columns\TextColumn::make('user_profile_address_01')->label('Address')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('state.state_name')->label('State')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('user_profile_address_zip')->label('Zip')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('time_zone')->label('Time Zone')->searchable()->sortable()
            ])
            ->filters([
                //
            ])
            ->headerActions([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
