<?php

namespace App\Filament\Resources\BioResource\Pages;

use App\Filament\Resources\BioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBio extends ViewRecord
{
    protected static string $resource = BioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
