<?php

namespace App\Filament\Resources\KelolaAset\AsetResource\Pages;

use App\Filament\Resources\KelolaAset\AsetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAsets extends ListRecords
{
    protected static string $resource = AsetResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
