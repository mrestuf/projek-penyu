<?php

namespace App\Filament\Resources\KelolaPegawai\PekerjaanResource\Pages;

use App\Filament\Resources\KelolaPegawai\PekerjaanResource;
use Filament\Resources\Pages\EditRecord;

class EditPekerjaan extends EditRecord
{
    protected static string $resource = PekerjaanResource::class;

    protected function getActions(): array
    {
        return [
          //
        ];
    }
}
