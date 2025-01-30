<?php

namespace App\Filament\Resources\JenisInventarisResource\Pages;

use App\Filament\Resources\JenisInventarisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisInventaris extends EditRecord
{
    protected static string $resource = JenisInventarisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
