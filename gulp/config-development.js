var fs           = require('fs');

if (!process.env.PWD) {
    process.env.PWD = process.cwd();
}

var packageConfig = require(process.env.PWD + '/package.json');

var dest = './wp-content/themes/dev-' + packageConfig.name;
var src = './src';

var bower_components = './src/bower_components';
var node_modules = './node_modules';

module.exports = {
    options: {
        version: packageConfig.version
    },
    autoprefixer: [
        'last 2 version',
        'safari 5',
        'ie 9',
        'opera 12.1',
        'ios 6',
        'android 4'
    ],
    browserSync: {
        port: 3000, // Port number for the live version of the site; default: 3000
        proxy: 'pavlovamoscow', // We need to use a proxy instead of the built-in server because WordPress has to do some server-side rendering for the theme to work

        open: false,
        files: [
            dest + "/**",
            // Exclude Map files
            "!" + dest + "/**.map"
        ]
    },
    sass: {
        src: src + "/resources/sass/**", // files which are watched for changes, but not compiled directly
        main: src + "/resources/sass/*.{scss, sass, css}", // files which are compiled with all their decendants
        dest: dest,
        options: {
            compress: false
        }
    },
    images: {
        src: src + "/resources/images/**",
        dest: dest + "/resources/images"
    },
    svg: {
        src: src + "/resources/svg/**",
        dest: dest + "/resources/svg"
    },
    markup: {
        src: src + '/templates/**/*.php',
        dest: dest
    },
    copy: {
        src: [
            src + '/*.*' // Meta files e.g. Screenshot for WordPress Theme Selector
        ],
        dest: dest,
        options: {
            base: src // ensure that all copy tasks keep folder structure
        }
    },
    bump: {
        unreleasedPlaceholder: /## unreleased/ig, // To be replaced in documents with version number
        prereleaseChangelogs: false, // If true, changelog update with prerelease bump
        options: {
            preid : 'beta' // Set the prerelase tag to use
        }
    },
    changelog: {
        src: './CHANGELOG.md',
        dest: dest
    },
    browserify: {
        // Enable source maps
        debug: true,
        transforms: {
            uglifyify: false
        },
        // Additional file extentions to make optional
        extensions: ['.coffee', '.hbs'],
        // A separate bundle will be generated for each
        // bundle config in the list below
        bundleConfigs: [{
            entries: src + '/resources/javascripts/index.js',
            dest: dest,
            outputName: 'app.js'
        }]
    }
};
