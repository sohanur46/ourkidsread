<?php

namespace App\Filament\Resources\RbmatchResource\Pages;

use App\Filament\Resources\RbmatchResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRbmatch extends EditRecord
{
    protected static string $resource = RbmatchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
