<?php

namespace App\Filament\Resources\SiswaEkskulResource\Pages;

use App\Filament\Resources\SiswaEkskulResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiswaEkskul extends EditRecord
{
    protected static string $resource = SiswaEkskulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
