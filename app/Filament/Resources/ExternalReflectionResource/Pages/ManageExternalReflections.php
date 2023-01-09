<?php

namespace App\Filament\Resources\ExternalReflectionResource\Pages;

use App\Filament\Resources\ExternalReflectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageExternalReflections extends ManageRecords
{
    protected static string $resource = ExternalReflectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
