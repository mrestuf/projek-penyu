<?php

namespace App\Filament\Widgets;

use App\Models\PaketWisata;
use App\Models\GalleryWisata;
use App\Models\Wisata;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class PaketWisataOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Paket', PaketWisata::all()->count()),
            Card::make('Gallery', GalleryWisata::all()->count()),
            Card::make('Wisata', Wisata::all()->count())
        ];
    }
}
