<?php

namespace App\Filament\Resources\KelolaWisata;

use App\Filament\Resources\KelolaWisata\ReviewResource\Pages;
use App\Filament\Resources\KelolaWisata\ReviewResource\RelationManagers;
use App\Models\Review;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Wisata';
    protected static ?string $navigationLabel = 'Review Wisata';
    protected static ?string $pluralModelLabel = 'Review Wisata';

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
                Tables\Columns\TextColumn::make('wisata_id')->label('Nama Wisata'),
                Tables\Columns\TextColumn::make('wisatawan_id')->label('Nama Wisatawan'),
                Tables\Columns\TextColumn::make('review')->label('Review'),
                Tables\Columns\TextColumn::make('created_at')->label('Created At'),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At'),
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
            'index' => Pages\ListReviews::route('/'),
        ];
    }
}
