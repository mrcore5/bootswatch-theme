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
        "select2.css",
        "select2-bootstrap.css",
        "jquery.growl.css",
        "dataTables.bootstrap.css"
    ], 'Assets/css/theme-bundle.css', 'Assets/css');

    mix.scripts([
    	"lodash.js",
    	"jquery-3.1.1.js",
    	"vue-1.0.js",
		"bootstrap.js",
        "jquery.hotkeys.min.js",
        "jquery.dataTables.1.10.7.min.js",
        "jquery.dataTables.bootstrap.js",
        "jquery.growl.js",
        "dataTables.js",
        "select2.js",
        "prism.js",
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
