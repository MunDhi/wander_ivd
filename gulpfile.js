var gulp = require('gulp');

/* sass stuff */
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var rename = require('gulp-rename');
var sassInput = 'src/sass/style.scss';
var sassOutput = 'dist/css';
var autoprefixerOptions = {
	browsers: ['last 2 versions','iOS > 7'],
	grid: [true]
};

/* js stuff */
var babel = require('gulp-babel');
var jsInput = 'src/js/*.js';
var jsOutput = 'dist/js';

gulp.task('sass', function() {
	/* input files */
	gulp.src(sassInput)
	/* run sass */
	.pipe(sass({outputStyle: 'compressed'}).on('error',sass.logError))
    // .pipe(sass({outputStyle: 'expanded'}).on('error',sass.logError))
	/* rename file */
	.pipe(rename('style.min.css'))
    // .pipe(rename('style-full.css'))
	/* run autoprefixer */
    .pipe(autoprefixer(autoprefixerOptions))
    /* output files */
    .pipe(gulp.dest(sassOutput));
});

/* babel */
gulp.task('js', function() {
	return gulp.src(jsInput)
	.pipe(babel({
		presets: ['es2015']
	}))
	.pipe(gulp.dest(jsOutput));
});

/* watch files */
gulp.task('watch', function() {
	return gulp
	.watch('src/**/*', ['sass','js'])
	/* log in console to let us know it ran */
	.on('change', function(event) {
		console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
	});
});

gulp.task('default', ['sass', 'js', 'watch']);