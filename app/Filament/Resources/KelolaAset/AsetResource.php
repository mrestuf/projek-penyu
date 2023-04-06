<?php

namespace App\Filament\Resources\KelolaAset;

use App\Filament\Resources\KelolaAset\AsetResource\Pages;
use App\Filament\Resources\KelolaAset\AsetResource\RelationManagers;
use App\Models\Aset;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kode_aset')->label('Kode Aset'),
                Tables\Columns\TextColumn::make('barang.nama_barang')->label('Nama Barang'),
                Tables\Columns\TextColumn::make('volume')->label('Volume'),
                // Tables\Columns\TextColumn::make('satuan')->label('Satuan'),
                // Tables\Columns\TextColumn::make('kondisi')->label('Kondisi'),
                // Tables\Columns\TextColumn::make('umur_ekonomis')->label('Umur Ekonomis'),
                Tables\Columns\TextColumn::make('nilai_aset')->label('Nilai Aset'),
                // Tables\Columns\TextColumn::make('sumber_dana')->label('Sumber Dana'),
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
