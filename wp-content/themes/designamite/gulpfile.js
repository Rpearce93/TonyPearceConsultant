// grab our gulp packages
var gulp  = require('gulp'),
    jshint = require('gulp-jshint'),
    sass   = require('gulp-sass'),
    debug = require('gulp-debug'),
    gutil = require('gulp-util'),
    notify = require("gulp-notify"),
    webpack = require('webpack-stream'),
    uglify = require('gulp-uglify'),
    autoprefixer = require('gulp-autoprefixer');

gulp.task('default', ['watch']);

gulp.task('build-js', function() {
  return gulp.src('js/main.js')
    .pipe(webpack({output: {filename: 'main.js'} }))
    .on('error', function(err){
        notify().write(err);
        this.emit('end');
    })
    .pipe(uglify())
    .pipe(gulp.dest('js/dist'))
    .on('end', function(){ notify().write('js compiled') });
});

// configure sass task
gulp.task('build-css', function() {
  return gulp.src('scss/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(autoprefixer({
      browsers: ['last 2 version', 'ie 9', 'opera 12.1', 'ios 6', 'android 4']
    }))
    .on('error', function(err){
        notify().write(err);
        this.emit('end');
    })
    .pipe(gulp.dest(''))
    .on('end', function(){ notify().write('scss compiled') });
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', function() {
  gulp.watch('scss/**/*.scss', ['build-css']);
  gulp.watch('js/**/*.js', ['build-js']);
});