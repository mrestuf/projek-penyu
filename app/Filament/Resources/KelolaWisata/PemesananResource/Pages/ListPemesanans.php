<?php

namespace App\Filament\Resources\KelolaWisata\PemesananResource\Pages;

use App\Filament\Resources\KelolaWisata\PemesananResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPemesanans extends ListRecords
{
    protected static string $resource = PemesananResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
