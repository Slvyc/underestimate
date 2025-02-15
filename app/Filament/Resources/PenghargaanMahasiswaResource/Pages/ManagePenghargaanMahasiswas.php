<?php

namespace App\Filament\Resources\PenghargaanMahasiswaResource\Pages;

use App\Filament\Resources\PenghargaanMahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePenghargaanMahasiswas extends ManageRecords
{
    protected static string $resource = PenghargaanMahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
