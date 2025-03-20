<?php

namespace App\Filament\Resources\SopPanduanResource\Pages;

use App\Filament\Resources\SopPanduanResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSopPanduans extends ManageRecords
{
    protected static string $resource = SopPanduanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
