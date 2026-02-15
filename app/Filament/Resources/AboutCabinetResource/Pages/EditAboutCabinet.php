<?php

namespace App\Filament\Resources\AboutCabinetResource\Pages;

use App\Filament\Resources\AboutCabinetResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutCabinet extends EditRecord
{
    protected static string $resource = AboutCabinetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
