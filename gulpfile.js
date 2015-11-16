var gulp = require('gulp');

var sass = require('gulp-sass');

var autoprefixer = require('gulp-autoprefixer');

var sourcemaps = require('gulp-sourcemaps');

var browserSync = require('browser-sync').create();
 
 
gulp.task('sass', function () {
  gulp.src('./public/sass/**/*.scss')
  	.pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./public/css'));

});
 
gulp.task('sass:watch', function () {
  gulp.watch('./public/sass/**/*.scss', ['sass']);
});

gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
});

gulp.task('default', function() {
  // place code for your default task here
});