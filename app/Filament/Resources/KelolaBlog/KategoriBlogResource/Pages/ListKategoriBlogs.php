<?php

namespace App\Filament\Resources\KelolaBlog\KategoriBlogResource\Pages;

use App\Filament\Resources\KelolaBlog\KategoriBlogResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriBlogs extends ListRecords
{
    protected static string $resource = KategoriBlogResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
