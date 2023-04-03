<?php

namespace App\Filament\Resources\KelolaPegawai;

use App\Filament\Resources\KelolaPegawai\PegawaiResource\Pages;
use App\Filament\Resources\KelolaPegawai\PegawaiResource\RelationManagers;
use App\Models\Pegawai;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class PegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Pegawai';
    protected static ?string $navigationLabel = 'Data Pegawai';
    protected static ?string $pluralModelLabel = 'Data Pegawai';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Card::make([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('password')
                  ->password()
                  ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                  ->dehydrated(fn ($state) => filled($state))
                  ->required(fn (string $context): bool => $context === 'create')
                  ->hidden(fn (string $context): bool => $context !== 'create'),
                Forms\Components\TextInput::make('divisi')->required(),
                Forms\Components\TextInput::make('jabatan')->required(),
              ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nama Pegawai')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('divisi')->label('Divisi'),
                Tables\Columns\TextColumn::make('jabatan')->label('Jabatan'),
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
            'index' => Pages\ListPegawais::route('/')
        ];
    }
}
