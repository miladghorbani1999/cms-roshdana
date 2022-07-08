const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
        require('autoprefixer'),
    ]).version();

mix.postCss('resources/css/bootstrap.min.css','public/css/').version();

mix.postCss('resources/css/admin/index.css','public/css/admin').version();

mix.postCss('resources/css/site/index.css','public/css/site').version();

mix.postCss('resources/css/main.css','public/css/').version();


mix.postCss('resources/css/fonts/yekan_font.css','public/css/fonts/').options({
    processCssUrls: false
}).version();

mix.postCss('resources/css/fonts/vazir_font.css','public/css/fonts/').options({
    processCssUrls: false
}).version();
