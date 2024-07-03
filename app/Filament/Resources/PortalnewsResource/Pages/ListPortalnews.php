<?php

namespace App\Filament\Resources\PortalnewsResource\Pages;

use App\Filament\Resources\PortalnewsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortalnews extends ListRecords
{
    protected static string $resource = PortalnewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
