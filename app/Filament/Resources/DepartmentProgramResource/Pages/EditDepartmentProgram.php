<?php

namespace App\Filament\Resources\DepartmentProgramResource\Pages;

use App\Filament\Resources\DepartmentProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDepartmentProgram extends EditRecord
{
    protected static string $resource = DepartmentProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
