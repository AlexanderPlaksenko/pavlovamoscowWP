'use strict';

module.exports = function(gulp){
  gulp.task('build', ['browserify', 'sass', 'images', 'svg', 'markup', 'copy', 'changelog']);
};
