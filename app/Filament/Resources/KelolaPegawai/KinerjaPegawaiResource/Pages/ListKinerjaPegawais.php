<?php

namespace App\Filament\Resources\KelolaPegawai\KinerjaPegawaiResource\Pages;

use App\Filament\Resources\KelolaPegawai\KinerjaPegawaiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKinerjaPegawais extends ListRecords
{
    protected static string $resource = KinerjaPegawaiResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
