<?php

namespace App\Filament\Resources\ReaderResource\RelationManagers;

use App\Models\Dayofweek;
use App\Models\Itemuser;
use App\Models\Timeofday;
use Filament\Forms;
use Filament\Forms\Form;
use App\Models\Availablesession;
use Filament\Forms\Get;
use Illuminate\Support\Collection as SupportCollection;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\ScheduledAvailability;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ItemusersRelationManager extends RelationManager
{
    protected static string $relationship = 'itemusers';

    
    protected static ?string $label = 'Availabilities';

    protected static ?string $title = 'Availabilities';
    protected static ?string $navigationLabel = 'Availabilities';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('sched_availability_day')
                    ->label('Day')
                    ->required()
                    ->live()
                    ->options(Availablesession::select('sched_availability_day')
                    ->distinct()->pluck('sched_availability_day', 'sched_availability_day')),

                Forms\Components\Select::make('sched_availability_time')
                    ->options(fn (Get $get): SupportCollection => Availablesession::query()
                        ->where('sched_availability_day', $get('sched_availability_day'))
                        ->pluck('sched_availability_time', 'sched_availability_time'))
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('sched_availability_day')
            ->columns([
                Tables\Columns\TextColumn::make('availability.sched_availability_day')->searchable()->sortable()->label('Day'),
                Tables\Columns\TextColumn::make('availability.sched_availability_time')->searchable()->sortable()->label('Time'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()->using(function (array $data, string $model): Model {

                    $availablesession = Availablesession::query()
                        ->where('sched_availability_day', $data['sched_availability_day'])
                        ->where('sched_availability_time', $data['sched_availability_time'])
                        ->first();

                    return $model::firstOrCreate([
                            'item_type_id' => 11,
                            'item_id' => $availablesession->sched_availability_id,
                            'user_id' => parent::getOwnerRecord()->id,
                        ], [
                            'create_date' => now()->format('Y-m-d H:i:s'),
                            'last_updated_date' => now()->format('Y-m-d H:i:s'),
                            'last_updated_by' => -1
                        ]);                
                })
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
