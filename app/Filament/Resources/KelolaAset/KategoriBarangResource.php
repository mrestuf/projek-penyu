<?php

namespace App\Filament\Resources\KelolaAset;

use App\Filament\Resources\KelolaAset\KategoriBarangResource\Pages;
use App\Filament\Resources\KelolaAset\KategoriBarangResource\RelationManagers;
use App\Models\KategoriBarang;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KategoriBarangResource extends Resource
{
    protected static ?string $model = KategoriBarang::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Aset';
    protected static ?string $navigationLabel = 'Kategori Barang';
    protected static ?string $pluralModelLabel = 'Kategori Barang';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                    Forms\Components\TextInput::make('kode_kategori')->label('Kode Kategori')->required(),
                    Forms\Components\TextInput::make('nama_kategori')->label('Nama Kategori')->required()->numeric(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_kategori')->label('Kode Kategori'),
                Tables\Columns\TextColumn::make('nama_kategori')->label('Nama Kategori'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At'),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At'),
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
            'index' => Pages\ListKategoriBarangs::route('/'),
            'create' => Pages\CreateKategoriBarang::route('/create'),
            'edit' => Pages\EditKategoriBarang::route('/{record}/edit'),
        ];
    }
}
