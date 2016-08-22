var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */


elixir(function(mix) {

	mix.styles([
		"font-awesome-animation.min.css",
		"font-awesome.min.css",
		"yamm.css",
		"jquery.growl.css",
		"dataTables.bootstrap.css"
	], 'Assets/css/theme-bundle.css', 'Assets/css');

	mix.scripts([
		"jquery-2.1.4.min.js",
		"jquery.hotkeys.min.js",
		"jquery.dataTables.1.10.7.min.js",
		"jquery.dataTables.bootstrap.js",
		"jquery.growl.js",
		"dataTables.js",
		"bootstrap.min.js",
		"prism.js",
		//"vue.js"
	], 'Assets/js/theme-bundle.js', 'Assets/js');

	mix.scripts([
		"html5shiv.js",
		"respond.min.js"
	], 'Assets/js/shiv-bundle.js', 'Assets/js');

});


/*


{
  "devDependencies": {
    "laravel-elixir": "*"
  }
}

 */
