<?php

namespace App\Filament\Resources\ArtworkCategoryResource\Pages;

use App\Filament\Resources\ArtworkCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArtworkCategories extends ListRecords
{
    protected static string $resource = ArtworkCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
