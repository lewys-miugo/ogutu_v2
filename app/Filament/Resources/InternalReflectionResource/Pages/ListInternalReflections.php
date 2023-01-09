<?php

namespace App\Filament\Resources\InternalReflectionResource\Pages;

use App\Filament\Resources\InternalReflectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInternalReflections extends ListRecords
{
    protected static string $resource = InternalReflectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
