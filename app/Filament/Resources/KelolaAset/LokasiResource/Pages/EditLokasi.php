<?php

namespace App\Filament\Resources\KelolaAset\LokasiResource\Pages;

use App\Filament\Resources\KelolaAset\LokasiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLokasi extends EditRecord
{
    protected static string $resource = LokasiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
