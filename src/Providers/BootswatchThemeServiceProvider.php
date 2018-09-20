<?php namespace Mrcore\BootswatchTheme\Providers;

use Module;
use Illuminate\Support\ServiceProvider;

class BootswatchThemeServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Mrcore Module Tracking
        Module::trace(get_class(), __function__);
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Mrcore Module Tracking
        Module::trace(get_class(), __function__);

        // Register publishers
        $this->registerPublishers();
    }

    /**
     * Define the published resources and configs.
     *
     * @return void
     */
    protected function registerPublishers()
    {
        // Only applies if running in console
        if (!$this->app->runningInConsole()) return;

        // App base path
        $path = realpath(__DIR__.'/../../');

        // Config publishing rules
        // ./artisan vendor:publish --tag="mrcore.bootswatch-theme.configs"
        $this->publishes([
            "$path/config" => base_path('/config/mrcore'),
        ], 'mrcore.bootswatch-theme.configs');

        /*
        // Migration publishing rules
        // ./artisan vendor:publish --tag="mrcore.wiki.migrations"
        $this->publishes([
            "$path/database/migrations" => base_path('/database/migrations'),
        ], 'mrcore.wiki.migrations');

        // Seed publishing rules
        // ./artisan vendor:publish --tag="mrcore.wiki.seeds"
        $this->publishes([
            "$path/database/seeds" => base_path('/database/seeds'),
        ], 'mrcore.wiki.seeds');
        */
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        // Only required if $defer = true and you add bindings in register()
        // Only use if the provier is super simple and basically only has a simle binding
        //return ['Mrcore\BootswatchTheme\Stuff', 'other bindings...'];
    }
}
