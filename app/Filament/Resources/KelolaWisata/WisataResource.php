<?php

namespace App\Filament\Resources\KelolaWisata;

use App\Filament\Resources\KelolaWisata\WisataResource\Pages;
use App\Filament\Resources\KelolaWisata\WisataResource\RelationManagers;
use App\Models\Wisata;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WisataResource extends Resource
{
    protected static ?string $model = Wisata::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Wisata';
    protected static ?string $navigationLabel = 'Data Wisata';
    protected static ?string $pluralModelLabel = 'Data Wisata';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                  Forms\Components\TextInput::make('nama_wisata')->label('Nama Wisata')->required(),
                  Forms\Components\RichEditor::make('deskripsi_wisata')->label('Deskripsi Wisata')->required(),
                  Grid::make()->schema([
                    Forms\Components\TimePicker::make('jadwal_buka')->label('Jam Buka')->required(),
                    Forms\Components\TimePicker::make('jadwal_tutup')->label('Jam Tutup')->required(),
                  ]),
                  Forms\Components\TextInput::make('harga_wisata')->label('Harga Tiket')->required()->numeric(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_wisata')->label('Nama Wisata'),
                Tables\Columns\TextColumn::make('deskripsi_wisata')->html(),
                Tables\Columns\TextColumn::make('jadwal_buka')->label('Jadwal Buka'),
                Tables\Columns\TextColumn::make('jadwal_tutup')->label('Jadwal Tutup'),
                Tables\Columns\TextColumn::make('harga_wisata')->label('Harga Wisata'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At'),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListWisatas::route('/'),
            'edit' => Pages\EditWisata::route('/{record}/edit'),
        ];
    }    
}
