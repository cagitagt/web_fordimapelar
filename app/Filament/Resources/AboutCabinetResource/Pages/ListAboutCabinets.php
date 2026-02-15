<?php

namespace App\Filament\Resources\AboutCabinetResource\Pages;

use App\Filament\Resources\AboutCabinetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutCabinets extends ListRecords
{
    protected static string $resource = AboutCabinetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
