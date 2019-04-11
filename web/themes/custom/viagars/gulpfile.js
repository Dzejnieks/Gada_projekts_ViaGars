'use strict';

var postcss = require('gulp-postcss');
var gulp = require('gulp');
var sass = require('gulp-sass');
var cssNext = require('postcss-cssnext')({ browsers: ['last 2 versions'] });
var cssnano = require('cssnano');
var postcssDiscardComments = require('postcss-discard-comments');

gulp.task('development', function () {
    var processors = [
        cssNext,
        postcssDiscardComments
    ];
    return gulp.src('./sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss(processors))
        .pipe(gulp.dest('./css'));
});

gulp.task('production', function () {
    var processors = [
        cssNext,
        postcssDiscardComments,
        cssnano
    ];
    return gulp.src('./sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss(processors))
        .pipe(gulp.dest('./css'));
});

gulp.task('watch', function() {

  gulp.watch('./sass/**/*.scss', ['development']);

});

// Run watch and wait for changes
gulp.task('default', ['development', 'watch']);