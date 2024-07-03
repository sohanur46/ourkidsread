<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AvailablesessionResource\Pages;
use App\Filament\Resources\AvailablesessionResource\RelationManagers;
use App\Models\Availablesession;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AvailablesessionResource extends Resource
{
    protected static ?string $model = Availablesession::class;

    protected static ?string $recordTitleAttribute = 'sched_availability_day';

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $label = 'Availability Schedule';
    protected static ?string $navigationLabel = 'Availability Schedule';

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('sched_availability_day')
                    ->label('Day')
                    ->options([
                        'Monday'    => 'Monday',
                        'Tuesday'   => 'Tuesday',
                        'Wednesday' => 'Wednesday',
                        'Thursday'  => 'Thursday',
                        'Friday'    => 'Friday',
                        'Saturday'  => 'Saturday',
                        'Sunday'    => 'Sunday'
                    ]),
                Forms\Components\Select::make('sched_availability_time')
                    ->label('Time')
                    ->options([
                        '3:00 PM'    => '3:00 PM',
                        '3:30 PM'   => '3:30 PM',
                        '4:00 PM'    => '4:00 PM',
                        '4:30 PM'   => '4:30 PM',
                        '5:00 PM' => '5:00 PM',
                        '5:30 PM'  => '5:30 PM',
                        '6:00 PM'    => '6:00 PM',
                        '6:30 PM'  => '6:30 PM',
                        '7:00 PM'    => '7:00 PM',
                        '7:30 PM'    => '7:30 PM',
                        '8:00 PM'    => '8:00 PM',
                        '8:30 PM'    => '8:30 PM',
                        '9:00 PM'    => '9:00 PM',
                        '9:30 PM'    => '9:30 PM',
                        '10:00 PM'    => '10:00 PM',
                        '10:30 PM'    => '10:30 PM',
                        '11:00 PM'    => '11:00 PM',
                        '11:30 PM'    => '11:30 PM'
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sched_availability_day')
                    ->label('Day')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sched_availability_time')
                    ->label('Time')
                    ->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAvailablesessions::route('/'),
            'create' => Pages\CreateAvailablesession::route('/create'),
            'edit' => Pages\EditAvailablesession::route('/{record}/edit'),
        ];
    }
}
