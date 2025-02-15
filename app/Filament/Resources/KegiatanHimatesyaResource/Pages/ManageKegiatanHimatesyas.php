<?php

namespace App\Filament\Resources\KegiatanHimatesyaResource\Pages;

use App\Filament\Resources\KegiatanHimatesyaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKegiatanHimatesyas extends ManageRecords
{
    protected static string $resource = KegiatanHimatesyaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
