<?php

namespace App\Filament\Resources\KelolaBlog\BlogResource\Pages;

use App\Filament\Resources\KelolaBlog\BlogResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;
}
