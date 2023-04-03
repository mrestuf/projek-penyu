<?php

namespace App\Filament\Resources\KelolaPegawai\PegawaiResource\Pages;

use App\Filament\Resources\KelolaPegawai\PegawaiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePegawai extends CreateRecord
{
    protected static string $resource = PegawaiResource::class;

    protected function getRedirectUrl(): string
    {
      return $this->getResource()::getUrl('index');
    }
}
