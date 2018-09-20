## Mrcore Bootswatch Theme v5.7

`mrcore/bootswatch-theme` is a module for the [mRcore Framework](https://github.com/mrcore5/framework)

This module provides a simple bootsrap layout and gives you all the themes from https://bootswatch.com

## What Is Mrcore

mRcore is a module system for Laravel allowing you to build all your applications as reusable modules.
Module resemble the Laravel folder structure and can be plugged into a single Laravel instance.
mRcore solves module loading dependency order and in-place live asset handling.  Modules can be
full web UIs, REST APIs and/or full Console command line apps.  A well build module becomes your
shared PHP library, a native API, which can be reused as dependencies in other modules.

We firmly believe that all code should be built as modules and not in Laravels directory structure itself.
Laravel simply becomes the "app server".  A single Laravel instance can host any number of modules.

See https://github.com/mrcore5/framework for details and installation instructions.


## Official Documentation

This is the main mrcore5 bootswatch base theme.
Configure it in your `System/config/modules.php` file under the `BaseTheme` section.


## Versions

* 1.0 is for Laravel 5.1 and below
* 2.0 is for Laravel 5.3, 5.4, 5.5
* 5.6 is for Laravel 5.6
* 5.7 is for Laravel 5.7
* ... Following Laravel versions from here on

## Contributing

Thank you for considering contributing to the mRcore framework!  Fork and pull!

### License

mRcore is open source software licensed under the [MIT license](http://mreschke.com/license/mit)


# Notes

# Original package.json

{
    "private": true,
    "devDependencies": {
            "gulp": "^3.8.8"
    },
    "dependencies": {
        "laravel-elixir": "^5.0.0"
    }
}

# New package.json for webpack

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
