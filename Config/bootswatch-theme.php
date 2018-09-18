<?php

/**
 * Mrcore App Configuration File
 *
 * All configs use env() so you can override in your own .env
 * You can also publish the entire configuration with
 * ./artisan vendor:publish --tag="mrcore.bootswatch-theme.configs"
 * This config is merged, meaning it handles partial overrides
 * Access with config('mrcore.bootswatch-theme.test')
 */

// Return this modules config
return [

    // These app paths for module and console command usage
    'paths' => [
        'psr4' => '',
        'assets' => 'Assets',
        'public' => 'Assets',
        'config' => 'Config',
        'database' => null,
        'migrations' => null,
        'factories' => null,
        'seeds' => null,
        'tests' => null,
        'routes' => null,
        'route_prefix' => null,
        'views' => 'Views',
        'view_prefix' => null,
    ],

];
