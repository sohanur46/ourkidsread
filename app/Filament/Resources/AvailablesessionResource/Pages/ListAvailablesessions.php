<?php

namespace App\Filament\Resources\AvailablesessionResource\Pages;

use App\Filament\Resources\AvailablesessionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAvailablesessions extends ListRecords
{
    protected static string $resource = AvailablesessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
