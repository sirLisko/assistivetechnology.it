'use strict';

var gulp = require('gulp');
var $ = require('gulp-load-plugins')();


var onError = function(err){
    $.util.log(err.plugin + ': ' + $.util.colors.red(err.message));
	$.util.beep();
};


gulp.task('clean', function(){
	require('del')(['build'], function (err, deletedFiles) {
			console.log('build deleted!', deletedFiles.join(', '));
		});
});


gulp.task('copy', function(){
	gulp.src('./public/**/*')
		.pipe(gulp.dest('./build'));
});


gulp.task('css', function () {
    return gulp.src('./src/style.css')
        .pipe($.csso())
        .pipe(gulp.dest('./build'));
});


gulp.task('html', function() {
	gulp.src(['./src/pages/**/*.html'])
		.pipe($.fileInclude())
       	.on('error', onError)
		/*.pipe($.minifyHtml())*/
		.pipe(gulp.dest('./build'));
});


gulp.task('open', function(){
	require('open')('./build/index.html');
});


gulp.task('sitemap', function () {
    gulp.src('build/**/*.html')
        .pipe($.sitemap({
            siteUrl: 'http://assistivetechnology.it'
        }))
        .pipe(gulp.dest('./build'));
});


gulp.task('watch', function() {
	gulp.start('default');
	gulp.watch('./src/**/*.html', ['html']);
});

gulp.task('default', ['html', 'copy', 'css', 'sitemap']);
