<?php

namespace App\Filament\Resources\ZoomsessionResource\Pages;

use App\Filament\Resources\ZoomsessionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListZoomsessions extends ListRecords
{
    protected static string $resource = ZoomsessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
