<?php

namespace App\Filament\Resources\KelolaPegawai;

use App\Filament\Resources\KelolaPegawai\AbsensiResource\Pages;
use App\Filament\Resources\KelolaPegawai\AbsensiResource\RelationManagers;
use App\Models\Absensi;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbsensiResource extends Resource
{
    protected static ?string $model = Absensi::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Pegawai';
    protected static ?string $navigationLabel = 'Data Absensi Pegawai';
    protected static ?string $pluralModelLabel = 'Data Absensi';

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
              Tables\Columns\TextColumn::make('pegawai.name')->label('Nama Pegawai')->searchable()->sortable(),
              Tables\Columns\TextColumn::make('jadwal_masuk')->label('Jadwal Masuk'),
              Tables\Columns\TextColumn::make('jadwal_keluar')->label('Jadwal Keluar'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //
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
            'index' => Pages\ListAbsensis::route('/')
        ];
    }    
}
