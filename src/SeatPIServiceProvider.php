<?php

namespace Raykazi\Seat\PI;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Event;
use Seat\Services\AbstractSeatPlugin;

/**
 * Class SeatConnectorProvider.
 */
class SeatPIServiceProvider extends AbstractSeatPlugin
{
    /**
     * Bootstrap the application services.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        $this->addCommands();
        $this->addMigrations();
        $this->addRoutes();
        $this->addViews();
        $this->addTranslations();
        $this->addApiEndpoints();
        $this->addEvents();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/package.sidebar.php', 'package.sidebar');
        $this->mergeConfigFrom(__DIR__ . '/Config/seat-pi.config.php', 'seat-pi.config');

        $this->registerPermissions(__DIR__ . '/Config/seat-pi.permissions.php', 'seat-pi');
    }

    /**
     * Return the plugin public name as it should be displayed into settings.
     *
     * @return string
     *
     * @example SeAT Web
     */
    public function getName(): string
    {
        return 'SeAT PI';
    }

    /**
     * Return the plugin repository address.
     *
     * @example https://github.com/eveseat/web
     *
     * @return string
     */
    public function getPackageRepositoryUrl(): string
    {
        return 'https://github.com/raykazi/seat-pi';
    }

    /**
     * Return the plugin technical name as published on package manager.
     *
     * @return string
     *
     * @example web
     */
    public function getPackagistPackageName(): string
    {
        return 'seat-pi';
    }

    /**
     * Return the plugin vendor tag as published on package manager.
     *
     * @return string
     *
     * @example eveseat
     */
    public function getPackagistVendorName(): string
    {
        return 'raykazi/seat-pi';
    }

    /**
     * Import migrations.
     */
    private function addMigrations()
    {
//        $this->loadMigrationsFrom(__DIR__ . '/database/migrations/');
    }

    /**
     * Register cli commands.
     */
    private function addCommands()
    {
        $this->commands([
//            DriverUpdateSets::class,
//            DriverApplyPolicies::class,
        ]);
    }

    /**
     * Register views.
     */
    private function addViews()
    {
//        $this->loadViewsFrom(__DIR__ . '/resources/views', 'seat-pi');
    }

    /**
     * Import routes.
     */
    private function addRoutes()
    {
        if (! $this->app->routesAreCached()) {
            include __DIR__ . '/Http/routes.php';
        }
    }

    /**
     * Import translations.
     */
    private function addTranslations()
    {
//        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'seat-pi');
    }

    /**
     * Import API endpoints.
     */
    private function addApiEndpoints()
    {
        $this->registerApiAnnotationsPath([
            __DIR__ . '/Http/Resources',
            __DIR__ . '/Http/Controllers/Api/V2',
        ]);
    }

    /**
     * Register events listeners.
     */
    private function addEvents()
    {
        Event::listen(EventLogger::class, LoggerListener::class);
    }
}
