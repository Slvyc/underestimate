<?php

namespace App\Filament\Resources\KurikulumMesinResource\Pages;

use App\Filament\Resources\KurikulumMesinResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKurikulumMesins extends ManageRecords
{
    protected static string $resource = KurikulumMesinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
