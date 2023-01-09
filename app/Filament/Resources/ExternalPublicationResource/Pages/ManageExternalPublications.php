<?php

namespace App\Filament\Resources\ExternalPublicationResource\Pages;

use App\Filament\Resources\ExternalPublicationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageExternalPublications extends ManageRecords
{
    protected static string $resource = ExternalPublicationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
