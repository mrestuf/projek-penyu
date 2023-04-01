<?php

namespace App\Filament\Resources\WisataResource\Pages;

use App\Filament\Resources\WisataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWisata extends EditRecord
{
    protected static string $resource = WisataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
