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
// mix.webpackConfig({ output: { devtoolModuleFilenameTemplate: '[resource-path]' }, }) .sourceMaps(false, 'inline-source-map');
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

    mix.postCss('resources/css/base.css','public/css');
    mix.postCss('resources/css/home.css','public/css');
    mix.postCss('resources/css/bootstrap.css','public/css').sourceMaps(true, 'resources/css/bootstrap.css.map')
    mix.js('resources/js/bootstrap.min.js', 'public/js').sourceMaps()
    mix.js('resources/js/popper.js', 'public/js').sourceMaps()
    mix.js('resources/js/jquery.min.js', 'public/js').sourceMaps()