<?php

namespace App\Filament\Resources\Statistics\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StatisticForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('value')
                    ->required(),
                TextInput::make('icon'),
            ]);
    }
}
