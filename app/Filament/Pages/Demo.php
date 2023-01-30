<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Demo extends Page
{
    protected static ?string $title = 'Clients Demos';
    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-bar';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel = 'Clients Demos';
    protected static string $view = 'filament.pages.demo';
    protected static ?string $slug = 'demo';
}
