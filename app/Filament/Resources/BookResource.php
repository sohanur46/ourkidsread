<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Filament\Resources\BookResource\RelationManagers;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationGroup = 'Library';
    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('book_title')
                    ->required()
                    ->label('Book Title')
                    ->maxLength(255),

                Forms\Components\TextInput::make('book_isbn_13')
                    ->required()
                    ->label('Book isbn 13')
                    ->maxLength(255),

                Forms\Components\TextInput::make('book_isbn_10')
                    ->required()
                    ->label('Book isbn 10')
                    ->maxLength(255),

                Forms\Components\TextInput::make('book_num_pages')
                    ->required()
                    ->label('Number of pages')
                    ->maxLength(255),

                Forms\Components\TextInput::make('book_desc_short')
                    ->required()
                    ->label('Description')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('book_title')->searchable()->sortable()->label('Book Title'),
                Tables\Columns\TextColumn::make('book_isbn_13')->searchable()->sortable()->label('Book isbn 13'),
                Tables\Columns\TextColumn::make('book_isbn_10')->label('Book Isbn 10')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('book_num_pages')->label('Number of pages')->searchable()->sortable()
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
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
