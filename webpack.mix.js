const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.css('resources/css/reset.css', 'public/css');
mix.css('resources/css/responsive.css', 'public/css');
mix.css('resources/css/style.css', 'public/css');
mix.js('resources/js/validation.js', 'public/js');
mix.js('resources/js/animation.js', 'public/js')
