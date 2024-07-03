<?php

namespace App\Filament\Resources\AvailablesessionResource\Pages;

use App\Filament\Resources\AvailablesessionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAvailablesession extends EditRecord
{
    protected static string $resource = AvailablesessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
