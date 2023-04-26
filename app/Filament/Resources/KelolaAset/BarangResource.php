<?php

namespace App\Filament\Resources\KelolaAset;

use App\Filament\Resources\KelolaAset\BarangResource\Pages;
use App\Filament\Resources\KelolaAset\BarangResource\RelationManagers;
use App\Models\Barang;
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
use Filament\Forms\Components\Select;


class BarangResource extends Resource
{
    protected static ?string $model = Barang::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Aset';
    protected static ?string $navigationLabel = 'Barang';
    protected static ?string $pluralModelLabel = 'Barang';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('kategori_barang_id')
                    ->options(KategoriBarang::all()->pluck('kode_kategori', 'id')->toArray()),
                Forms\Components\TextInput::make('nama_barang')
                    ->placeholder('Meja')
                    ->required(),
                Forms\Components\TextInput::make('merek_barang')
                    ->placeholder('IKEA')
                    ->required(),
                Forms\Components\TextInput::make('tahun_perolehan')
                    ->placeholder('2023')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kategori_barang.kode_kategori')->label('Kategori'),
                Tables\Columns\TextColumn::make('nama_barang')->label('Nama Barang'),
                Tables\Columns\TextColumn::make('merek_barang')->label('Merek Barang'),
                Tables\Columns\TextColumn::make('tahun_perolehan')->label('Tahun Perolehan'),
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
            'index' => Pages\ListBarangs::route('/'),
            'create' => Pages\CreateBarang::route('/create'),
            'edit' => Pages\EditBarang::route('/{record}/edit'),
        ];
    }
}
