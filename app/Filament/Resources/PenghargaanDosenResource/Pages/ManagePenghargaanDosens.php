<?php

namespace App\Filament\Resources\PenghargaanDosenResource\Pages;

use App\Filament\Resources\PenghargaanDosenResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePenghargaanDosens extends ManageRecords
{
    protected static string $resource = PenghargaanDosenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
