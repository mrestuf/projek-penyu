<?php

namespace App\Filament\Resources\KelolaAset\KategoriBarangResource\Pages;

use App\Filament\Resources\KelolaAset\KategoriBarangResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriBarangs extends ListRecords
{
    protected static string $resource = KategoriBarangResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
