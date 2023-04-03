<?php

namespace App\Filament\Resources\KelolaPegawai\AbsensiResource\Pages;

use App\Filament\Resources\KelolaPegawai\AbsensiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAbsensis extends ListRecords
{
    protected static string $resource = AbsensiResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }
}
