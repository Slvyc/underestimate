<?php

namespace App\Filament\Resources\KurikulumSiResource\Pages;

use App\Filament\Resources\KurikulumSiResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKurikulumSis extends ManageRecords
{
    protected static string $resource = KurikulumSiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
