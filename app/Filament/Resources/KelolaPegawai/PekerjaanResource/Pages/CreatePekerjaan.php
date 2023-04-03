<?php

namespace App\Filament\Resources\KelolaPegawai\PekerjaanResource\Pages;

use App\Filament\Resources\KelolaPegawai\PekerjaanResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePekerjaan extends CreateRecord
{
    protected static string $resource = PekerjaanResource::class;

    protected function getRedirectUrl(): string
    {
      return $this->getResource()::getUrl('index');
    }
}
