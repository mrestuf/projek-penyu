<?php

namespace App\Filament\Resources\KelolaAset\BarangResource\Pages;

use App\Filament\Resources\KelolaAset\BarangResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarang extends EditRecord
{
    protected static string $resource = BarangResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
