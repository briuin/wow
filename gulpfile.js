var elixir = require('laravel-elixir');
var elixirTypscript = require('elixir-typescript');
var Task = elixir.Task;
var gulp = require('gulp');
var shell = require('gulp-shell');


//require('./elixir-extensions')
//require('laravel-elixir-vueify');
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
 
 
 elixir.extend('routeScanning', function() {
 
 new Task('routeScanning', function() {
        return gulp.src('').
      //pipe(shell('php artisan route:clear')).
      pipe(shell('php artisan route:list'));
                 });

                 
 });


elixir(function(mix) {

	
  
    mix.sass('app.scss').routeScanning();   
    mix.scripts('jquery-2.2.2.min.js','public/js/jquery.min.js'); 
    mix.scripts('react-dom.min.js','public/js/react-dom.min.js'); 
    mix.scripts('react.min.js','public/js/react.min.js'); 
    
   
    mix.typescript('app.tsx','public/js/app.js',{
			jsx: 'react'
		});
     
  
});

