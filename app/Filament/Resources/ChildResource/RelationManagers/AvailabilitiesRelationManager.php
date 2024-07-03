<?php

namespace App\Filament\Resources\ChildResource\RelationManagers;

use App\Models\Availablesession;
use App\Models\Childschedule;
use App\Models\Rbmatch;
use App\Models\Zoomsession;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Get;
use Illuminate\Contracts\View\View;
use Filament\Forms\Components\Select;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Actions\Action;
use Filament\Notifications\Notification;

class AvailabilitiesRelationManager extends RelationManager
{
    protected static string $relationship = 'availabilities';

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
                    ->options(fn (Get $get): Collection => Availablesession::query()
                        ->where('sched_availability_day', $get('sched_availability_day'))
                        ->pluck('sched_availability_time', 'sched_availability_time'))
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('item_id')
            ->columns([
                Tables\Columns\TextColumn::make('availability.sched_availability_day')->searchable()->sortable()->label('Day'),
                Tables\Columns\TextColumn::make('availability.sched_availability_time')->searchable()->sortable()->label('Time')
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
                            'child_id' => parent::getOwnerRecord()->child_id,
                        ], [
                            'create_date' => now()->format('Y-m-d H:i:s'),
                            'last_updated_date' => now()->format('Y-m-d H:i:s'),
                            'last_updated_by' => -1
                        ]);
                })
            ])
            ->actions([
                Tables\Actions\Action::make('match')
                    ->label('Create match')
                    ->icon('heroicon-o-hand-thumb-up')
                    ->defaultColor('success')
                    ->form(function (Childschedule $childschedule){
                        return [
                            Forms\Components\Select::make('zoomsession_id')
                                ->options(Zoomsession::all()->pluck('zoom_session_title', 'zoom_session_ID'))
                                ->label('Select zoom session'),
                            Forms\Components\ViewField::make('reader_id')
                                ->label('Select Buddy')
                                ->required()
                                ->view('filament.forms.components.buddy-selector')
                                ->viewData([
                                    'action' => $childschedule
                                ])
                        ];
                    })
                    ->mutateFormDataUsing(function (Childschedule $childschedule, array $data): array {
                        $data['child_id'] = $childschedule->child_id;
                        $data['created_at'] = now()->format('Y-m-d H:i:s');
                        $data['updated_at'] = now()->format('Y-m-d H:i:s');
                        $data['child_schedule_id'] = $childschedule->id;
                        $data['sched_availability_id'] = $childschedule->availability->sched_availability_id;
                        
                        Rbmatch::create($data);
                        return $data;
                    })->slideOver(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
