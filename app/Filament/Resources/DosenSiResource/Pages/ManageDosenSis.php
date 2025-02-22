<?php

namespace App\Filament\Resources\DosenSiResource\Pages;

use App\Filament\Resources\DosenSiResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDosenSis extends ManageRecords
{
    protected static string $resource = DosenSiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
