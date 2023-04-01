<?php

namespace App\Filament\Resources\PaketWisataResource\Pages;

use App\Filament\Resources\PaketWisataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaketWisata extends EditRecord
{
    protected static string $resource = PaketWisataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
