var elixir 		= require('laravel-elixir'),
	bowerDir	= "vendor/bower_components/";

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
elixir( function( mix ){
	mix.copy( bowerDir + "bootstrap/fonts","public/fonts" )
		.copy( bowerDir + "jquery/dist/jquery.min.js","public/js/jquery.min.js" )
		.copy( bowerDir + "bootstrap/dist/js/bootstrap.min.js","public/js/bootstrap.min.js" );
	mix.less( 'app.less' );
	
});

