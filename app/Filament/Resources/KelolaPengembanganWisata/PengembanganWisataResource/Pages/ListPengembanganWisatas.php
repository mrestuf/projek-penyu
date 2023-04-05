<?php

namespace App\Filament\Resources\KelolaPengembanganWisata\PengembanganWisataResource\Pages;

use App\Filament\Resources\KelolaPengembanganWisata\PengembanganWisataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengembanganWisatas extends ListRecords
{
    protected static string $resource = PengembanganWisataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
