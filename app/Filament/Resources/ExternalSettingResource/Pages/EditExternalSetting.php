<?php

namespace App\Filament\Resources\ExternalSettingResource\Pages;

use App\Filament\Resources\ExternalSettingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExternalSetting extends EditRecord
{
    protected static string $resource = ExternalSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
