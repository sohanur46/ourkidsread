<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ZoomsessionResource\Pages;
use App\Filament\Resources\ZoomsessionResource\RelationManagers;
use App\Models\Zoomsession;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ZoomsessionResource extends Resource
{
    protected static ?string $model = Zoomsession::class;

    protected static ?string $recordTitleAttribute = 'zoom_session_title';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $label = 'Zoom Sessions';
    protected static ?string $navigationLabel = 'Zoom Sessions';

    protected static ?string $navigationIcon = 'heroicon-o-video-camera';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('zoom_session_title')
                    ->required()
                    ->label('Title')
                    ->maxLength(256),
                Forms\Components\TextInput::make('zoom_session_URL')
                    ->required()
                    ->label('Zoom Url')
                    ->maxLength(512),
                Forms\Components\TextInput::make('zoom_session_account_name')
                    ->required()
                    ->label('Account')
                    ->maxLength(255),
                Forms\Components\TextInput::make('weekday_id')
                    ->required()
                    ->label('Day & Time')
                    ->numeric(),
                Forms\Components\TextInput::make('zoom_session_start_time')
                    ->required()
                    ->label('Start time')
                    ->maxLength(32),
                Forms\Components\TextInput::make('zoom_session_end_time')
                    ->required()
                    ->label('End time')
                    ->maxLength(32),
                Forms\Components\Toggle::make('is_available_flag')
                    ->label('Is available')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('zoom_session_title')->searchable()->label('Title'),
                Tables\Columns\TextColumn::make('zoom_session_URL')->searchable()->label('Zoom Url'),
                Tables\Columns\TextColumn::make('zoom_session_account_name')->searchable()->label('Account'),
                Tables\Columns\TextColumn::make('weekday_id')->numeric()->sortable()->label('Day & Time'),
                Tables\Columns\TextColumn::make('zoom_session_start_time')->label('Start time')->searchable(),
                Tables\Columns\TextColumn::make('zoom_session_end_time')->label('End time') ->searchable(),
                Tables\Columns\IconColumn::make('is_available_flag')->label('Is available')->boolean()
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
            'index' => Pages\ListZoomsessions::route('/'),
            'create' => Pages\CreateZoomsession::route('/create'),
            'edit' => Pages\EditZoomsession::route('/{record}/edit'),
        ];
    }
}
