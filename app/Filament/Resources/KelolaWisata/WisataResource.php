<?php

namespace App\Filament\Resources\KelolaWisata;

use App\Filament\Resources\KelolaWisata\WisataResource\Pages;
use App\Filament\Resources\KelolaWisata\WisataResource\RelationManagers;
use App\Models\Wisata;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
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
              Forms\Components\Card::make([
                Forms\Components\TextInput::make('name_wisata')->label('Nama Wisata'),
                Forms\Components\RichEditor::make('description')->label('Deskripsi Wisata'),
                Forms\Components\TextInput::make('price')->label('Harga Wisata')->numeric(),
                Forms\Components\FileUpload::make('images')->label('Foto Wisata')->image()->multiple(),
              ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
              Tables\Columns\TextColumn::make('name_wisata')->label('Nama Wisata'),
              Tables\Columns\TextColumn::make('description')->label('Description Wisata')->limit(50),
              Tables\Columns\TextColumn::make('price')->label('Harga Wisata')->prefix('Rp. '),
              Tables\Columns\TextColumn::make('created_at')->label('Created At'),
              Tables\Columns\TextColumn::make('updated_at')->label('Updated At'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
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
        ];
    }    
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
