<?php

namespace App\Filament\Resources\KelolaWisata\WisataResource\Pages;

use App\Filament\Resources\KelolaWisata\WisataResource;
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
