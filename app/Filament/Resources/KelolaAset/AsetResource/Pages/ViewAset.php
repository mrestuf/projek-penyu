<?php

namespace App\Filament\Resources\KelolaAset\AsetResource\Pages;

use App\Filament\Resources\KelolaAset\AsetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use App\Models\Aset;
use Illuminate\Support\Facades\Route;

use function Termwind\render;

class ViewAset extends ViewRecord
{
    protected static string $resource = AsetResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
