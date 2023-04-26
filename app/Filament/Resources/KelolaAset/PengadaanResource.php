<?php

namespace App\Filament\Resources\KelolaAset;

use App\Filament\Resources\KelolaAset\PengadaanResource\Pages;
use App\Filament\Resources\KelolaAset\PengadaanResource\RelationManagers;
use App\Models\Pengadaan;
use App\Models\Lokasi;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengadaanResource extends Resource
{
    protected static ?string $model = Pengadaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Aset';
    protected static ?string $navigationLabel = 'Pengadaan';
    protected static ?string $pluralModelLabel = 'Pengadaan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('lokasi_id')
                    ->options(Lokasi::all()->pluck('nama_lokasi', 'id')->toArray())
                    ->label('Nama Lokasi'),
                Forms\Components\Select::make('user_id')
                    ->options(User::all()->pluck('name', 'id')->toArray())
                    ->label('Nama User'),
                Forms\Components\TextInput::make('nama_aset')
                    ->placeholder('Laptop')
                    ->label('Nama Aset')
                    ->required(),
                Forms\Components\TextInput::make('tahun_pengadaan')
                    ->placeholder('2023')
                    ->label('Tahun Pengadaan')
                    ->required(),
                Forms\Components\TextInput::make('harga_satuan')
                    ->placeholder('100000')
                    ->label('Harga Satuan')
                    ->required(),
                Forms\Components\TextInput::make('volume')
                    ->placeholder('10')
                    ->label('Volume / Jumlah')
                    ->required(),
                Forms\Components\Select::make('satuan')
                    ->options([
                        'buah' => 'Buah',
                        'lembar' => 'Lembar',
                        'unit' => 'Unit',
                    ])
                    ->label('Satuan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('lokasi.nama_lokasi')->label('Nama Lokasi'),
                Tables\Columns\TextColumn::make('user.name')->label('Nama User'),
                Tables\Columns\TextColumn::make('nama_aset')->label('Nama Aset'),
                Tables\Columns\TextColumn::make('tahun_pengadaan')->label('Tahun Pengadaan'),
                Tables\Columns\TextColumn::make('harga_satuan')->label('Harga Satuan'),
                Tables\Columns\TextColumn::make('volume')->label('Volume / Jumlah'),
                Tables\Columns\TextColumn::make('satuan')->label('Satuan'),
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
            'index' => Pages\ListPengadaans::route('/'),
            'create' => Pages\CreatePengadaan::route('/create'),
            'edit' => Pages\EditPengadaan::route('/{record}/edit'),
        ];
    }
}
