<?php

namespace App\Filament\Resources\KesiapanTeknologiResource\Pages;

use App\Filament\Resources\KesiapanTeknologiResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKesiapanTeknologis extends ManageRecords
{
    protected static string $resource = KesiapanTeknologiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
