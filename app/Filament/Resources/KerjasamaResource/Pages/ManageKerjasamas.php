<?php

namespace App\Filament\Resources\KerjasamaResource\Pages;

use App\Filament\Resources\KerjasamaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKerjasamas extends ManageRecords
{
    protected static string $resource = KerjasamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
