<?php

namespace App\Filament\Resources\GalleryWisataResource\Pages;

use App\Filament\Resources\GalleryWisataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGalleryWisatas extends ListRecords
{
    protected static string $resource = GalleryWisataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
