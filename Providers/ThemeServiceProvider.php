<?php namespace Mrcore\Themes\Bootswatch\Providers;

use View;
use Config;
use Layout;
use Module;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Mrcore Module Tracking
        Module::trace(get_class(), __function__);
    }

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
}
