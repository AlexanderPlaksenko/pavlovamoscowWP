'use strict';

var plumber       = require('gulp-plumber');
var jeet          = require('jeet');
var autoprefixer  = require('gulp-autoprefixer');
var sass          = require('gulp-sass');
var replace       = require('gulp-replace');
var reload        = require('browser-sync').reload;
var handleErrors  = require('../../util/handleErrors');

module.exports = function(gulp, config){
  gulp.task('sass', function() {
    // TODO: Move to config
    var minifyOptions = {
      prod: {
        keepSpecialComments: 1
      }
    };

    return gulp.src(config.sass.main)
    .pipe(plumber())
    .pipe(sass(config.sass.options))
    .pipe(sass({
      use: [
        jeet(),
        autoprefixer(config.autoprefixer)
      ]
    }))
    .pipe(gulp.dest(config.sass.dest))
    .pipe(replace(/{PKG_VERSION}/g,  config.options.version))
    .pipe(gulp.dest(config.sass.dest))
    .pipe(reload({
      stream: true
    }))
    .on('error', handleErrors);
  });
};
