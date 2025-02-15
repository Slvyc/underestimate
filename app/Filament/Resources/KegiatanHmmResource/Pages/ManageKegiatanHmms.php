<?php

namespace App\Filament\Resources\KegiatanHmmResource\Pages;

use App\Filament\Resources\KegiatanHmmResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKegiatanHmms extends ManageRecords
{
    protected static string $resource = KegiatanHmmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
