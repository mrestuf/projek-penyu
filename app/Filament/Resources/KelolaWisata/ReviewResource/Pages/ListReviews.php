<?php

namespace App\Filament\Resources\KelolaWisata\ReviewResource\Pages;

use App\Filament\Resources\KelolaWisata\ReviewResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReviews extends ListRecords
{
    protected static string $resource = ReviewResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
