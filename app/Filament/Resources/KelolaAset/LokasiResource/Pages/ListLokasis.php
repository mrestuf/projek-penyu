<?php

namespace App\Filament\Resources\KelolaAset\LokasiResource\Pages;

use App\Filament\Resources\KelolaAset\LokasiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLokasis extends ListRecords
{
    protected static string $resource = LokasiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
