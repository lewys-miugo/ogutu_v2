<?php

namespace App\Filament\Resources\InternalPublicationResource\Pages;

use App\Filament\Resources\InternalPublicationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInternalPublications extends ListRecords
{
    protected static string $resource = InternalPublicationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
