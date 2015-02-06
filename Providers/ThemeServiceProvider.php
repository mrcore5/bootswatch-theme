<?php namespace Mrcore\Themes\Bootswatch\Providers;

use View;
use Config;
use Layout;
use Mrcore\Modules\Foundation\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider {

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
		// Register additional views
		// Needs to happen later here in boot() instead of register()
		// Because we want these to register LAST so thay can be overridden early
		View::addLocation(__DIR__.'/../Views');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		// Set main bootswatch css theme
		$css = Config::get('theme.css');
		Layout::css('css/bootstrap/'.$css);

		// Bootstrap Container
		Layout::container(
			Config::get('theme.container'),
			Config::get('theme.header_container'),
			Config::get('theme.footer_container')
		);
	}

}
