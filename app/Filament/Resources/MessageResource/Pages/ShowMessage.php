<?php

namespace App\Filament\Resources\MessageResource\Pages;

use App\Filament\Resources\MessageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ShowMessage extends ListRecords
{
    protected static string $resource = MessageResource::class;

}
