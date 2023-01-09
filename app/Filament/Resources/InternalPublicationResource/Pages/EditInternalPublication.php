<?php

namespace App\Filament\Resources\InternalPublicationResource\Pages;

use App\Filament\Resources\InternalPublicationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInternalPublication extends EditRecord
{
    protected static string $resource = InternalPublicationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
