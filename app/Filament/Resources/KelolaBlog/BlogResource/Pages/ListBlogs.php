<?php

namespace App\Filament\Resources\KelolaBlog\BlogResource\Pages;

use App\Filament\Resources\KelolaBlog\BlogResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogs extends ListRecords
{
    protected static string $resource = BlogResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
