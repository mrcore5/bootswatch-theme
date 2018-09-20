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
