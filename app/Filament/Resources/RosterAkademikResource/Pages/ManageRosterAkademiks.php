<?php

namespace App\Filament\Resources\RosterAkademikResource\Pages;

use App\Filament\Resources\RosterAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRosterAkademiks extends ManageRecords
{
    protected static string $resource = RosterAkademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
