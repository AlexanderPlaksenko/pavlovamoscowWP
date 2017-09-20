var fs   = require('fs');
var gutil = require('gulp-util');
var packageConfig = require(process.env.PWD + '/package.json');

var dest = '/wp-content/themes/prod-' + packageConfig.name;
var src = './src';

// Load base config
var prodConfig = require('./config-development');

// Start making changes for production.
// We recommend to access properties directly as shown below and
// not assigning whole objects.
prodConfig.browserify.debug = false;

prodConfig.sass.options.cache = false;
prodConfig.sass.options.compress = true;
prodConfig.sass.options.sourcemap = false;

prodConfig.browserify.transforms.uglifyify = true; // minifies module with UglifyJS

module.exports = prodConfig;
