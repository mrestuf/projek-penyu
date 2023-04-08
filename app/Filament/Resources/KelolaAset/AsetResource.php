<?php

namespace App\Filament\Resources\KelolaAset;

use App\Filament\Resources\KelolaAset\AsetResource\Pages;
use App\Filament\Resources\KelolaAset\AsetResource\RelationManagers;
use App\Models\Aset;
use App\Models\Barang;
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


class AsetResource extends Resource
{
    protected static ?string $model = Aset::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Aset';
    protected static ?string $navigationLabel = 'Aset';
    protected static ?string $pluralModelLabel = 'Aset';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kode_aset')
                    ->placeholder('0000/KAT/THN')
                    ->required(),
                Forms\Components\Select::make('nama_barang')
                    ->options(Barang::all()->pluck('nama_barang', 'id')->toArray())
                    ->disablePlaceholderSelection(),
                Forms\Components\TextInput::make('volume')
                    ->placeholder('10')
                    ->required(),
                Forms\Components\Select::make('satuan')
                    ->options([
                        'buah' => 'Buah',
                        'lembar' => 'Lembar',
                        'unit' => 'Unit',
                    ])
                    ->disablePlaceholderSelection()
                    ->required(),
                Forms\Components\Select::make('kondisi')
                    ->options([
                        'baik' => 'Baik',
                        'rusak' => 'Rusak',
                    ])
                    ->disablePlaceholderSelection()
                    ->required(),
                Forms\Components\TextInput::make('umur_ekonomis')
                    ->suffix('Tahun')
                    ->placeholder('1/2/3')
                    ->required(),
                Forms\Components\TextInput::make('nilai_aset')
                    ->prefix('Rp.')
                    ->placeholder('100000')
                    ->required(),
                Forms\Components\Select::make('sumber_dana')
                    ->options([
                        'dinas' => 'Dinas',
                        'pemerintah' => 'Pemerintah',
                    ])
                    ->disablePlaceholderSelection()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_aset')->label('Kode Aset'),
                Tables\Columns\TextColumn::make('barang.nama_barang')->label('Nama Barang'),
                Tables\Columns\TextColumn::make('volume')->label('Volume'),
                Tables\Columns\TextColumn::make('nilai_aset')->label('Nilai Aset'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListAsets::route('/'),
            'create' => Pages\CreateAset::route('/create'),
            'view' => Pages\ViewAset::route('/{record}'),
            'edit' => Pages\EditAset::route('/{record}/edit'),
        ];
    }
}
