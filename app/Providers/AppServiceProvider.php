<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Dashboard;
use Illuminate\Support\ServiceProvider;

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
        // Create my own navigation so that I can easily customize it.
        Filament::navigation(function (NavigationBuilder $builder): NavigationBuilder {
            return $builder->items([
                ...Dashboard::getNavigationItems(),
                NavigationItem::make('Bio')
                    ->icon('heroicon-o-user-circle')
                    ->activeIcon('heroicon-s-user-circle')
                    ->isActiveWhen(fn(): bool => request()->routeIs('filament.resources.bios.edit'))
                    ->url(route('filament.resources.bios.edit', 1)),
            ]);
        });

    }
}
