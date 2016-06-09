## Mrcore Bootswatch Theme v2.0

This is an mRcore theme that provides the 16 https://bootswatch.com http://getbootstrap.com themes.

## What Is Mrcore

Mrcore is a set of Laravel components used to build various systems.
It is a framework, a development platform and a CMS.  It is a modularized version of Laravel
providing better package development support.  Think of Laravel 4.x workbenches on steroids.

See https://github.com/mrcore5/framework for details and installation instructions.

## Official Documentation

This is the main mrcore5 bootswatch base theme.
Configure it in your `System/config/modules.php` file under the `BaseTheme` section.


## Versions

* 1.0 is for Laravel 5.1 and below
* 2.0 is for Laravel 5.2 and above

## Contributing

Thank you for considering contributing to the mRcore framework!  Fork and pull!

### License

Mrcore is open-sourced software licensed under the [MIT license](http://mreschke.com/license/mit)



# original package.json

{
	"private": true,
	"devDependencies": {
			"gulp": "^3.8.8"
	},
	"dependencies": {
		"laravel-elixir": "^5.0.0"
	}
}

# new package.json for webpack

{
  "private": true,
  "name": "mrcore-bootswatch-theme",
  "version": "1.0.0",
  "description": "Mrcore Bootswatch Base Theme",
  "main": "webpack.config.js",
  "scripts": {
    "test": "echo \"Error: no test specified\" && exit 1",
    "build": "webpack",
    "start": "webpack-dev-server",
    "lint": "eslint . --ext .js --ext .jsx",
    "stylelint": "stylelint app/assets/css/*"
  },
  "author": "Matthew Reschke <mail@mreschke.com>",
  "license": "MIT",
  "devDependencies": {
    "babel-core": "^6.9.1",
    "babel-eslint": "^6.0.4",
    "babel-loader": "^6.2.4",
    "babel-preset-es2015": "^6.9.0",
    "css-loader": "^0.23.1",
    "eslint": "^2.11.1",
    "eslint-loader": "^1.3.0",
    "eslint-plugin-react": "^5.1.1",
    "node-sass": "^3.7.0",
    "postcss-loader": "^0.9.1",
    "sass-loader": "^3.2.0",
    "style-loader": "^0.13.1",
    "stylelint": "^6.5.1",
    "stylelint-config-standard": "^8.0.0",
    "webpack": "^1.13.1",
    "webpack-dev-server": "^1.14.1",
    "webpack-merge": "^0.13.0"
  }
}
