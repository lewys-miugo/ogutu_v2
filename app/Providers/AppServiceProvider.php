<?php

namespace App\Providers;

use App\Filament\Resources\ContactResource;
use App\Filament\Resources\EducationResource;
use App\Filament\Resources\GalleryResource;
use App\Filament\Resources\InterestResource;
use App\Filament\Resources\InternalReflectionResource;
use App\Filament\Resources\PositionResource;
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
                    ->isActiveWhen(fn(): bool => request()->routeIs('filament.resources.bios.*'))
                    ->url(route('filament.resources.bios.view', 1)),
                ...PositionResource::getNavigationItems(),
                ...EducationResource::getNavigationItems(),
                ...GalleryResource::getNavigationItems(),
                ...InterestResource::getNavigationItems(),
                ...ContactResource::getNavigationItems(),
                ...InternalReflectionResource::getNavigationItems()
            ]);
        });

    }
}
