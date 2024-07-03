<?php

namespace App\Filament\Resources\NewscategoryResource\Pages;

use App\Filament\Resources\NewscategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewscategory extends EditRecord
{
    protected static string $resource = NewscategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
