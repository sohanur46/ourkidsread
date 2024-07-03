<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RbmatchResource\Pages;
use App\Filament\Resources\RbmatchResource\RelationManagers;
use App\Models\Rbmatch;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RbmatchResource extends Resource
{
    protected static ?string $model = Rbmatch::class;

    protected static ?string $navigationGroup = 'Matching';

    protected static ?string $label = 'RB Matches';
    protected static ?string $navigationLabel = 'RB Matches';
    protected static ?string $navigationIcon = 'heroicon-o-arrow-up-on-square-stack';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reader.user_name_first')->label('Reading buddy')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('child.child_name_first')->label('Child')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('zoom.zoom_session_title')->label('Zoom Session')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('child_confirm')->label('Child Confirmed')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('reader_confirm')->label('Reader Confirmed')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('availability.sched_availability_day')->label('Day')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('availability.sched_availability_time')->label('Time')->searchable()->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('match_date')->label('Match date')->searchable()->sortable()->toggleable(),
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
            'index' => Pages\ListRbmatches::route('/'),
            'edit' => Pages\EditRbmatch::route('/{record}/edit'),
        ];
    }
}
