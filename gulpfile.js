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

	// React JS
	mix.browserify('app/app.js', 'public/styles/js/app.js');

	// libary css
	mix.styles([
        'bootstrap.css', 'carousel.css', 'summernote.css', 'style.css'
    ], 'public/styles/css/libary.css');

	// libary js
    mix.scripts([
    	'jquery.min.js', 'bootstrap.js', 'summernote.min.js'
    ], 'public/styles/js/libary.js');

    mix.less('app.less', 'public/styles/css/app.css');

    mix.browserSync({
    	proxy: 'localhost:8000'
    });
});
