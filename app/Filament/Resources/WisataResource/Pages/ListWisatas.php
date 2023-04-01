<?php

namespace App\Filament\Resources\WisataResource\Pages;

use App\Filament\Resources\WisataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWisatas extends ListRecords
{
    protected static string $resource = WisataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
