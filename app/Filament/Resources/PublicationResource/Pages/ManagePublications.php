<?php

namespace App\Filament\Resources\PublicationResource\Pages;

use App\Filament\Resources\PublicationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePublications extends ManageRecords
{
    protected static string $resource = PublicationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
