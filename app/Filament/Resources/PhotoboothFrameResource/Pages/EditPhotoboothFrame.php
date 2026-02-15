<?php

namespace App\Filament\Resources\PhotoboothFrameResource\Pages;

use App\Filament\Resources\PhotoboothFrameResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPhotoboothFrame extends EditRecord
{
    protected static string $resource = PhotoboothFrameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
