<?php

namespace App\Filament\Resources\KelolaPegawai\PegawaiResource\Pages;

use App\Filament\Resources\KelolaPegawai\PegawaiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPegawais extends ListRecords
{
    protected static string $resource = PegawaiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
