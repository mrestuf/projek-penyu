<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaketWisataResource\Pages;
use App\Filament\Resources\PaketWisataResource\RelationManagers;
use App\Models\PaketWisata;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaketWisataResource extends Resource
{
    protected static ?string $model = PaketWisata::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Wisata';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('paket')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('wisata')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('paket'),
                Tables\Columns\TextColumn::make('wisata'),
                Tables\Columns\TextColumn::make('harga'),
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
            'index' => Pages\ListPaketWisatas::route('/'),
            'create' => Pages\CreatePaketWisata::route('/create'),
            'edit' => Pages\EditPaketWisata::route('/{record}/edit'),
        ];
    }
}
