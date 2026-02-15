<?php

namespace App\Filament\Resources\ArtworkCategoryResource\Pages;

use App\Filament\Resources\ArtworkCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArtworkCategory extends EditRecord
{
    protected static string $resource = ArtworkCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
