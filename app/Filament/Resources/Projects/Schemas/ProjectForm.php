<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('location'),
                TextInput::make('system_capacity'),
                TextInput::make('type'),
                Textarea::make('description')
                    ->columnSpanFull(),
                Textarea::make('images')
                    ->columnSpanFull(),
                FileUpload::make('featured_image')
                    ->image(),
            ]);
    }
}
