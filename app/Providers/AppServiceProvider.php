<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use App\Filament\Pages\MyProfile;
use Filament\Navigation\UserMenuItem;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::serving(function () {
            Filament::registerViteTheme('resources/css/filament.css');

            Filament::registerUserMenuItems([
                'account' => UserMenuItem::make()->url(MyProfile::getUrl()),
            ]);
        });
        Filament::registerRenderHook(
            'content.start',
            fn (): View => view('auth.verify-email'),
        );
    }
}
