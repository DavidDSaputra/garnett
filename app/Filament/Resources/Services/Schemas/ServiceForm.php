<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('short_description')
                    ->columnSpanFull(),
                Textarea::make('content')
                    ->columnSpanFull(),
                FileUpload::make('icon_image')
                    ->image(),
                Textarea::make('benefits')
                    ->columnSpanFull(),
                Textarea::make('installation_steps')
                    ->columnSpanFull(),
            ]);
    }
}
