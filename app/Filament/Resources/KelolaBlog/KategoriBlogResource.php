<?php

namespace App\Filament\Resources\KelolaBlog;

use App\Filament\Resources\KelolaBlog\KategoriBlogResource\Pages;
use App\Filament\Resources\KelolaBlog\KategoriBlogResource\RelationManagers;
use App\Models\KategoriBlog;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Forms\Components\Card;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KategoriBlogResource extends Resource
{
    protected static ?string $model = KategoriBlog::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Blog';
    protected static ?string $navigationLabel = 'Kategori Blog';
    protected static ?string $pluralModelLabel = 'Kategori Blog';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                    Forms\Components\TextInput::make('nama_kategory')
                        ->placeholder('Konservasi')
                        ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('nama_kategory')->label('Nama Kategory')
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
            'index' => Pages\ListKategoriBlogs::route('/'),
            'create' => Pages\CreateKategoriBlog::route('/create'),
            'edit' => Pages\EditKategoriBlog::route('/{record}/edit'),
        ];
    }
}
