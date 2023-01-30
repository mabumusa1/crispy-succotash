<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Buy extends Page
{
    protected static ?string $title = 'Go Live';

    protected static ?string $navigationIcon = 'heroicon-o-fire';

    protected static string $view = 'filament.pages.buy';

    protected static ?string $navigationLabel = 'Go live';

    protected static ?int $navigationSort = 3;

    protected static ?string $slug = 'buy';

}
