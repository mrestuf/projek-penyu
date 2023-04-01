<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryWisataResource\Pages;
use App\Filament\Resources\GalleryWisataResource\RelationManagers;
use App\Models\GalleryWisata;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryWisataResource extends Resource
{
    protected static ?string $model = GalleryWisata::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Wisata';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('wisata'),
                Tables\Columns\TextColumn::make('gambar'),
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
            'index' => Pages\ListGalleryWisatas::route('/'),
            'create' => Pages\CreateGalleryWisata::route('/create'),
            'edit' => Pages\EditGalleryWisata::route('/{record}/edit'),
        ];
    }
}
