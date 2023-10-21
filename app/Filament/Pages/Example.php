<?php

namespace App\Filament\Pages;

use App\Models\Client;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Pages\Page;

class Example extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.example';

    public function editAction(): EditAction
    {
        return EditAction::make()
            ->record(function (array $arguments) {
                // dump($arguments);

                return Client::find($arguments['client']);
            })
            ->form([
                Forms\Components\TextInput::make('name')
                    ->required(),
            ]);
    }
}
