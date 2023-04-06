<?php

namespace App\Filament\Resources\KelolaAset\AsetResource\Pages;

use App\Filament\Resources\KelolaAset\AsetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAset extends EditRecord
{
    protected static string $resource = AsetResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
