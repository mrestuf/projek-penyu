<?php

namespace App\Filament\Resources\KelolaPengembanganWisata;

use App\Filament\Resources\KelolaPengembanganWisata\PengembanganWisataResource\Pages;
use App\Filament\Resources\KelolaPengembanganWisata\PengembanganWisataResource\RelationManagers;
use App\Models\Crowdfunding;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengembanganWisataResource extends Resource
{
    protected static ?string $model = Crowdfunding::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Pengembangan Wisata';
    protected static ?string $navigationLabel = 'Data Wisata';
    protected static ?string $pluralModelLabel = 'Data Wisata';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                    Forms\Components\TextInput::make('nama_pengembangan_wisata'),
                    Forms\Components\TextInput::make('target_pengembangan'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextInputColumn::make('nama_pengembangan_wisata')->label('Nama Wisata'),
                Tables\Columns\TextColumn::make('target_pengembangan')->label('Target Pengembangan'),
                Tables\Columns\TextColumn::make('total_pengembangan')->label('total_pengembangan'),
                Tables\Columns\SelectColumn::make('status')
                    ->label('total_pengembangan')
                    ->options([
                        'pending' => 'Pending',
                        'progress' => 'Progress',
                        'success' => 'Success',
                    ])->disablePlaceholderSelection(),
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
            'index' => Pages\ListPengembanganWisatas::route('/'),
        ];
    }
}
