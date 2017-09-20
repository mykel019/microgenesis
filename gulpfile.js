var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
    mix.styles([
    	'resources/assets/css',
    ],'public/css/plugin.css');

    mix.scripts([
    	'resources/assets/js/slick.js',
    	'resources/assets/js/slick.min.js'
    ],'public/js/init.js');


});

