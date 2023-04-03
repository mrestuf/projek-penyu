<?php

namespace App\Filament\Resources\KelolaPegawai;

use App\Filament\Resources\KelolaPegawai\PekerjaanResource\Pages;
use App\Filament\Resources\KelolaPegawai\PekerjaanResource\RelationManagers;
use App\Models\Pekerjaan;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PekerjaanResource extends Resource
{
    protected static ?string $model = Pekerjaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Pegawai';
    protected static ?string $navigationLabel = 'Data Pekerjaan';
    protected static ?string $pluralModelLabel = 'Data Pekerjaan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                  Forms\Components\TextInput::make('nama_pekerjaan')->minLength(5),
                  Forms\Components\RichEditor::make('deskripsi_pekerjaan')->minLength(5),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_pekerjaan')->label('Nama Pekerjaan'),
                Tables\Columns\TextColumn::make('deskripsi_pekerjaan')->html(),
                Tables\Columns\TextColumn::make('created_at')->label('Created At'),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListPekerjaans::route('/'),
            'create' => Pages\CreatePekerjaan::route('/create'),
            'edit' => Pages\EditPekerjaan::route('/{record}/edit'),
        ];
    }    
}
