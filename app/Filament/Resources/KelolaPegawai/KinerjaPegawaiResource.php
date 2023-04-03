<?php

namespace App\Filament\Resources\KelolaPegawai;

use App\Filament\Resources\KelolaPegawai\KinerjaPegawaiResource\Pages;
use App\Filament\Resources\KelolaPegawai\KinerjaPegawaiResource\RelationManagers;
use App\Models\Kinerja;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KinerjaPegawaiResource extends Resource
{
    protected static ?string $model = Kinerja::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Pegawai';
    protected static ?string $navigationLabel = 'Data Kinerja Pegawai';
    protected static ?string $pluralModelLabel = 'Data Kinerja Pegawai';

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
              Tables\Columns\TextColumn::make('pekerjaan_id')->label('Nama Pegawai'),
              Tables\Columns\TextColumn::make('pegawai_id')->label('Nama Pekerjaan'),
              Tables\Columns\TextColumn::make('deskripsi_pekerjaan')->label('Deskripsi Pekerjaan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListKinerjaPegawais::route('/'),
        ];
    }    
}
