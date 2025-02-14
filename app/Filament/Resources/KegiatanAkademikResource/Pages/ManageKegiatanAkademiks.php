<?php

namespace App\Filament\Resources\KegiatanAkademikResource\Pages;

use App\Filament\Resources\KegiatanAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKegiatanAkademiks extends ManageRecords
{
    protected static string $resource = KegiatanAkademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
