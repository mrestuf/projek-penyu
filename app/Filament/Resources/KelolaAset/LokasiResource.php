<?php

namespace App\Filament\Resources\KelolaAset;

use App\Filament\Resources\KelolaAset\LokasiResource\Pages;
use App\Filament\Resources\KelolaAset\LokasiResource\RelationManagers;
use App\Models\Lokasi;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LokasiResource extends Resource
{
    protected static ?string $model = Lokasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Aset';
    protected static ?string $navigationLabel = 'Lokasi Aset';
    protected static ?string $pluralModelLabel = 'Lokasi Aset';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_lokasi')
                    ->placeholder('Ruang Rapat')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_lokasi')->label('Nama Lokasi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLokasis::route('/'),
            'create' => Pages\CreateLokasi::route('/create'),
            'edit' => Pages\EditLokasi::route('/{record}/edit'),
        ];
    }
}
