<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortalnewsResource\Pages;
use App\Filament\Resources\PortalnewsResource\RelationManagers;
use App\Models\Portalnews;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortalnewsResource extends Resource
{
    protected static ?string $model = Portalnews::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Library';

    protected static ?string $label = 'Portal News';
    protected static ?string $navigationLabel = 'Portal News';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('headline')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('news_date')
                    ->required(),
                Forms\Components\TextInput::make('news_source')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('original_url')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('active')
                    ->required(),
                Forms\Components\Textarea::make('news')
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('headline')
                    ->searchable(),
                Tables\Columns\TextColumn::make('news_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('news_source')
                    ->searchable(),
                Tables\Columns\TextColumn::make('original_url')
                    ->searchable(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortalnews::route('/'),
            'create' => Pages\CreatePortalnews::route('/create'),
            'edit' => Pages\EditPortalnews::route('/{record}/edit'),
        ];
    }
}
