var gulp = require("gulp");
var sass = require('gulp-sass')(require('sass'));
var postcss = require("gulp-postcss");
var sourcemaps = require("gulp-sourcemaps");
var concat = require('gulp-concat');
var sync = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');
var rigger = require('gulp-rigger');
const { src } = require("gulp");
function style() {
    return gulp
        .src('assets/scss/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .on("error", sass.logError)
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('dist/css'))
        .pipe(sync.stream());
}
function style_build() {
    return gulp
        .src('assets/scss/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .on("error", sass.logError)
        .pipe(autoprefixer({
            overrideBrowserslist:['last 15 versions']
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('dist/css'))
}
function watch() {
    sync.init({
        proxy:"localhost/Projects/granite-ukraine-wp"
    });
    gulp.watch('assets/scss/*.scss', style);
    gulp.watch('assets/js/*.js', scripts);
}
function scripts() {
    return src(['assets/js/main.js'], {base: 'assets'})
        .pipe(sourcemaps.init({
            loadMaps: true
        }))
        .pipe(rigger())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('dist/'))
        .pipe(sync.stream());
}
exports.style = style;
exports.default = watch;
exports.build = style_build;