<?php

namespace App\Filament\Resources\KurikulumSipilResource\Pages;

use App\Filament\Resources\KurikulumSipilResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKurikulumSipils extends ManageRecords
{
    protected static string $resource = KurikulumSipilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
