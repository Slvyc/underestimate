<?php

namespace App\Filament\Resources\PengurusanSuratResource\Pages;

use App\Filament\Resources\PengurusanSuratResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePengurusanSurats extends ManageRecords
{
    protected static string $resource = PengurusanSuratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
