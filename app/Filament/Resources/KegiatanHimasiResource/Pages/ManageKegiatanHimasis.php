<?php

namespace App\Filament\Resources\KegiatanHimasiResource\Pages;

use App\Filament\Resources\KegiatanHimasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKegiatanHimasis extends ManageRecords
{
    protected static string $resource = KegiatanHimasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
