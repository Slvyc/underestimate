<?php

namespace App\Filament\Resources\KegiatanBemResource\Pages;

use App\Filament\Resources\KegiatanBemResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKegiatanBems extends ManageRecords
{
    protected static string $resource = KegiatanBemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
