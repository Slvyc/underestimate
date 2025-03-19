<?php

namespace App\Filament\Resources\DokumenAmiResource\Pages;

use App\Filament\Resources\DokumenAmiResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDokumenAmis extends ManageRecords
{
    protected static string $resource = DokumenAmiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
