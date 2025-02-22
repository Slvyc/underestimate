<?php

namespace App\Filament\Resources\DosenMesinResource\Pages;

use App\Filament\Resources\DosenMesinResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDosenMesins extends ManageRecords
{
    protected static string $resource = DosenMesinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
