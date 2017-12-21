let mix = require('laravel-mix');

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





/**
 * 

mix.less('resources/assets/less/app.less', 'public/css');
 */


mix.scripts([
    'public/js/custome.js'
  
], 'public/js/all.js');


// mix.styles([
//     'public/css/custome.css'

// ], 'public/css/all.css');