<?php

namespace App\Filament\Resources\KelolaPegawai\KinerjaPegawaiResource\Pages;

use App\Filament\Resources\KelolaPegawai\KinerjaPegawaiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKinerjaPegawai extends EditRecord
{
    protected static string $resource = KinerjaPegawaiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
