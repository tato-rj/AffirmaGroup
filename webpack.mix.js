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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
      'public/css/app.css',
      'resources/sass/primer/primer.css',
      'resources/sass/libraries/hamburgers.min.css'
      ], 'public/css/app.css')
    .copyDirectory('resources/images', 'public/images')
    .copyDirectory('resources/videos', 'public/videos')
    .version();
