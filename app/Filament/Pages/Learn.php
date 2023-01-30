<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Learn extends Page
{
    protected static ?string $title = 'Learn Mautic';

    protected static ?string $navigationLabel = 'Learn Mautic';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?int $navigationSort = 1;

    protected static string $view = 'filament.pages.learn';

    protected static ?string $slug = 'learn';



}
