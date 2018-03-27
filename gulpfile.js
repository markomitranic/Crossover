const scssInput = [
        'scss/style.scss'
    ],
    editorInput = [
        'scss/domain/wysiwyg-backend.scss'
    ],
    jsInput = [
        'scripts/domain/*.js'
    ],
    vendorInput = [
        'scripts/vendor/jquery-3.2.1.min.js',
        'scripts/vendor/ag-cookie.js',
        'scripts/vendor/EasePack.min.js',
        'scripts/vendor/rAF.js',
        'scripts/vendor/TweenLite.min.js',
        'scripts/vendor/statCounter.js'
    ],
    scssOutput = 'app/wp-content/themes/crossover/css',
    jsOutput = 'app/wp-content/themes/crossover/scripts/';

const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify');

gulp.task('sass', function() {
    return gulp
        .src(scssInput)
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(scssOutput))
});

gulp.task('editorSass', function() {
    return gulp
        .src(editorInput)
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(scssOutput))
});

gulp.task('domainScripts', function() {
    return gulp.src(jsInput)
        .pipe(sourcemaps.init())
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest(jsOutput))
        .pipe(rename('scripts.min.js'))
        .pipe(uglify()).on('error', sass.logError)
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(jsOutput));
});

gulp.task('vendorScripts', function() {
    return gulp.src(vendorInput)
        .pipe(concat('vendor.js'))
        .pipe(gulp.dest(jsOutput));
});

gulp.task('watch', ['sass', 'editorSass', 'domainScripts', 'vendorScripts'], function (){
    gulp.watch('scss/**/*.scss', ['sass', 'editorSass']);
    gulp.watch('scripts/domain/**/*.js', ['domainScripts']);
    gulp.watch('scripts/vendor/**/*.js', ['vendorScripts']);
});