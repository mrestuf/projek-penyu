<?php

namespace App\Filament\Resources\KelolaAset\BarangResource\Pages;

use App\Filament\Resources\KelolaAset\BarangResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangs extends ListRecords
{
    protected static string $resource = BarangResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
