<?php

namespace App\Filament\Resources\KelolaPegawai\PekerjaanResource\Pages;

use App\Filament\Resources\KelolaPegawai\PekerjaanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPekerjaans extends ListRecords
{
    protected static string $resource = PekerjaanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
