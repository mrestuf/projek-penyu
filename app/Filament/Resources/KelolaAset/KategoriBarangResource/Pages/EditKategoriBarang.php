<?php

namespace App\Filament\Resources\KelolaAset\KategoriBarangResource\Pages;

use App\Filament\Resources\KelolaAset\KategoriBarangResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriBarang extends EditRecord
{
    protected static string $resource = KategoriBarangResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
