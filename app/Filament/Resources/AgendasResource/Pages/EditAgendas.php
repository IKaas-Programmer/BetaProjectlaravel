<?php

namespace App\Filament\Resources\AgendasResource\Pages;

use App\Filament\Resources\AgendasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Hash;

class EditAgendas extends EditRecord
{
    protected static string $resource = AgendasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {

        return $data;
    }
}