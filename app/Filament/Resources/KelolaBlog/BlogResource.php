<?php

namespace App\Filament\Resources\KelolaBlog;

use App\Filament\Resources\KelolaBlog\BlogResource\Pages;
use App\Filament\Resources\KelolaBlog\BlogResource\RelationManagers;
use App\Models\KategoriBlog;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;



class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Kelola Blog';
    protected static ?string $navigationLabel = 'Blog';
    protected static ?string $pluralModelLabel = 'Blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                    Forms\Components\TextInput::make('judul_blog')
                        ->placeholder('Judul')
                        ->required(),
                    Forms\Components\Select::make('kategori_blog_id')
                        ->options(KategoriBlog::all()->pluck('nama_kategory', 'id')->toArray())
                        ->label('Kategori'),
                    Forms\Components\RichEditor::make('content')
                        ->required(),
                    Forms\Components\FileUpload::make('gambar')
                        ->label('Gambar')
                        ->image()
                        ->disk('public')
                        ->directory('img-blog')
                        ->visibility('public')
                        ->imagePreviewHeight('250'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul_blog')->label('Judul'),
                Tables\Columns\TextColumn::make('kategori_blog.nama_kategory')->label('Kategory'),
                ImageColumn::make('gambar')->disk('public')->size(100)
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
