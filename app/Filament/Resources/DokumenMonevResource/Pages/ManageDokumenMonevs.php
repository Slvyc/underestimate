<?php

namespace App\Filament\Resources\DokumenMonevResource\Pages;

use App\Filament\Resources\DokumenMonevResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDokumenMonevs extends ManageRecords
{
    protected static string $resource = DokumenMonevResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
