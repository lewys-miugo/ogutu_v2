<?php

namespace App\Filament\Resources\BioResource\Pages;

use App\Filament\Resources\BioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBio extends EditRecord
{
    protected static string $resource = BioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->hidden(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('view', ['record' => $this->record]);
    }
}
