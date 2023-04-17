<?php

namespace App\Filament\Resources\KelolaAset\PengadaanResource\Pages;

use App\Filament\Resources\KelolaAset\PengadaanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengadaans extends ListRecords
{
    protected static string $resource = PengadaanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
