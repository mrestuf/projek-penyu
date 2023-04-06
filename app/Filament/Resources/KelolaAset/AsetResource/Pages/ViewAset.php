<?php

namespace App\Filament\Resources\KelolaAset\AsetResource\Pages;

use App\Filament\Resources\KelolaAset\AsetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use App\Models\Aset;
use Filament\Tables\Columns\TextColumn;


class ViewAset extends ViewRecord
{
    protected static string $resource = AsetResource::class;


    public static function getColumns()
    {
        return [
            TextColumn::make('volume'),
            TextColumn::make('satuan'),
            TextColumn::make('created_at')->format('datetime'),
            TextColumn::make('updated_at')->format('datetime'),
        ];
    }

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
