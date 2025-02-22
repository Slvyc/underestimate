<?php

namespace App\Filament\Resources\DosenSipilResource\Pages;

use App\Filament\Resources\DosenSipilResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDosenSipils extends ManageRecords
{
    protected static string $resource = DosenSipilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
