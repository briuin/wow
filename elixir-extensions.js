// File: elixir-extensions.js
var gulp = require('gulp');
var shell = require('gulp-shell');
var Elixir = require('laravel-elixir');

var Task = Elixir.Task;

Elixir.extend('speak', function(message) {
    new Task('speak', function() {
        return gulp.src('').pipe(shell('say ' + message));
    });

});

Elixir.extend('hello', function(){
    new Task('hello', function(){
        console.log('First Gulp Task');
    });
});

// mix.speak('Hello World');