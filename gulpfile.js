
var gulp = require('gulp');

var sass = require('gulp-ruby-sass');
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


gulp.task('default', function() {
 console.log('def');
});

gulp.task('sass', function () {
 return sass('public/scss/style.scss')
     .on('error', sass.logError)
     .pipe(gulp.dest('public/css'));
});
