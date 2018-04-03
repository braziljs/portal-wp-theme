'use strict';

/* GULP PLUGINS
========================================================================== */
var gulp = require('gulp'),
	sass = require('gulp-sass'),
	prefix = require('gulp-autoprefixer'),
	rename = require('gulp-rename'),
 	livereload = require('gulp-livereload'),
	postcss = require('gulp-postcss'),
	cleanCSS = require('gulp-clean-css'),
	changed = require('gulp-changed'),
	sourcemaps = require('gulp-sourcemaps'),
	shell = require('gulp-shell'),
	clean = require('gulp-clean'),
	webp = require('gulp-webp'),
	imagemin = require('gulp-imagemin'),
	gulpCopy = require('gulp-copy'),
	requirejsOptimize = require('gulp-requirejs-optimize'),
	rev = require('gulp-rev'),
	revDel = require('rev-del'),
	override = require('gulp-rev-css-url'),
	runSequence = require('run-sequence');

/* CONFS
========================================================================== */
livereload({ start: true });

/* DEV TASKS
========================================================================== */
//Go to style guide folder and Start Fractal Server
gulp.task('fractalStart', shell.task([
  //'fractal start --sync'
]));


//Compile the Sass css, prefix the styles and create the sourceMap for the dev CSS
gulp.task('css', function() {

	return gulp.src('dev/sass/main-sass.scss')
	.pipe(sourcemaps.init())
	.pipe(sass({ errLogToConsole:true }))
	.pipe(prefix('last 15 version'))
	.pipe(rename('main.css'))
	.pipe(sourcemaps.write())
	.pipe(gulp.dest('dev/css'));

});

/* PROD TASKS
========================================================================== */

//Minify the dev CSS for production
gulp.task('minifyCSS', function () {

	return gulp.src('dev/sass/main-sass.scss')
	.pipe(sass({ errLogToConsole:true }))
	.pipe(prefix('last 15 version'))
	.pipe(cleanCSS({compatibility: 'ie8'}))
	.pipe(rename('main.css'))
	.pipe(gulp.dest('assets/css'));

});

//Use RequireJS to concatenate the js assets for production
gulp.task('scripts', function () {
    return gulp.src('dev/js/main.js')
	    .pipe(requirejsOptimize(function(file) {
            return {
            	name: 'main',
            	mainConfigFile: 'dev/js/main.js',
                optimize: 'uglify2',
                useStrict: true,
                baseUrl: 'dev/js',
                //include: ['lib/require.js'] /* If the site uses requireJS external links manager */
                include: ['lib/almond.js'] /* If the site don't use any external links manager, we use almond.js for building */
            };
        }))
        .pipe(gulp.dest('assets/js'));
});

//Creates WEBP image file
gulp.task('webp', function () {
    return gulp.src(['dev/img/**/*', '!dev/img/**/*.svg'])
        .pipe(webp({
        	quality: 90
        }))
        .pipe(gulp.dest('dev/img-min'));
});

//Minify the images
gulp.task('imageMin', function () {

    return gulp.src('dev/img/**/*')
    	.pipe(changed('dev/img-min'))
        .pipe(imagemin({
            optimizationLevel : 7
           // use: [pngcrush()]
        }))
        .pipe(gulp.dest('dev/img-min'));

});

//Clean the assets folder which will receive the rev'ed assets
gulp.task('clean', function () {
    return gulp.src('assets', {read: false})
    .pipe(clean());
});

//Copy the compressed images to the assets folder to be rev'ed
gulp.task('copy', function () {
	return gulp.src(['dev/img-min/**/*'], {base: 'assets'})
  	.pipe(gulpCopy('assets/img', { prefix: 2}))
});

//CREATES REV VERSION
gulp.task('rev', function () {
    // by default, gulp would pick `assets/css` as the base,
    // so we need to set it explicitly:
    return gulp.src(['assets/css/main.css', 'assets/js/main.js', 'assets/img/**/*.*', '!assets/img/**/*.webp'], {base: 'assets'})
        .pipe(rev())
        .pipe(override())
        .pipe(gulp.dest('assets'))  // write rev'd assets to build dir
        .pipe(rev.manifest())
        .pipe(revDel({ dest: 'assets' }))
        .pipe(gulp.dest('assets')); // write manifest to build dir
});

/* DEV TASKS
========================================================================== */
//Creates a livereload Server and build static assets on the fly.
gulp.task('default', function() {

	//Star the liveReload Server
	livereload({ start: true });

	//Start the FractalServer
	//gulp.start('fractalStart');

	//When a SASS file change, build the CSS
	gulp.watch('dev/sass/**/*.scss', ['css']);

	//When any CSS, HMTL, or JS files change, reload the browser
	gulp.watch(['dev/css/main.css', '**/*.html', '**/*.php', 'dev/js/**/*.js']).on('change', function(file) {
		livereload.changed(file.path);
	});

});

//Build the complete site inside the "build" folder
gulp.task('build', function(callback) {

 	runSequence('clean', 'minifyCSS', 'scripts', 'webp', 'imageMin', 'copy', 'rev', function () {
 		process.exit(0);
 	});

});