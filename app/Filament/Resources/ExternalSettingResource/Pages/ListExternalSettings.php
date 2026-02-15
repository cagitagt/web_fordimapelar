<?php

namespace App\Filament\Resources\ExternalSettingResource\Pages;

use App\Filament\Resources\ExternalSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExternalSettings extends ListRecords
{
    protected static string $resource = ExternalSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
