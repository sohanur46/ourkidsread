<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewscategoryResource\Pages;
use App\Filament\Resources\NewscategoryResource\RelationManagers;
use App\Models\Newscategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewscategoryResource extends Resource
{
    protected static ?string $model = Newscategory::class;

    protected static ?string $navigationGroup = 'Library';

    protected static ?string $label = 'News Category';
    protected static ?string $navigationLabel = 'News Category';

    protected static ?string $navigationIcon = 'heroicon-o-cursor-arrow-rays';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('portal_news_category_name')
                    ->required()
                    ->label('Category name')
                    ->maxLength(255)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('portal_news_category_name')
                    ->label('Category name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('portal_new_category_create_date')
                    ->label('Created date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListNewscategories::route('/'),
            'create' => Pages\CreateNewscategory::route('/create'),
            'edit' => Pages\EditNewscategory::route('/{record}/edit'),
        ];
    }
}
