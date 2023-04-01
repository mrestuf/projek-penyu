<?php

namespace App\Filament\Resources\GalleryWisataResource\Pages;

use App\Filament\Resources\GalleryWisataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGalleryWisata extends EditRecord
{
    protected static string $resource = GalleryWisataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
