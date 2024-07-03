<?php

namespace App\Filament\Resources\PortalnewsResource\Pages;

use App\Filament\Resources\PortalnewsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortalnews extends EditRecord
{
    protected static string $resource = PortalnewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
