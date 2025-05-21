<?php

namespace App\Filament\Resources\ArticlesCommentsResource\Pages;

use App\Filament\Resources\ArticlesCommentsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Hash;
use App\Models\ArticlesComments;
class CreateArticlesComments extends CreateRecord
{
    protected static string $resource = ArticlesCommentsResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}