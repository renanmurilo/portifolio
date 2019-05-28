var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');

// Compilar o Sass
gulp.task('sass', function () {
    return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'node_modules/animate.css/animate.min.css', 'src/scss/*.scss'])
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(gulp.dest("src/css"))
        .pipe(browserSync.stream());
});

// Mover JS para src/js
gulp.task('js', function () {
    return gulp.src([
        'node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/umd/popper.min.js',
        'node_modules/typed.js/lib/typed.min.js'
    ])
        .pipe(gulp.dest("src/js"))
        .pipe(browserSync.stream());
});

// Servidor para olhar os HTML/SCSS
gulp.task('serve', ['sass'], function () {

    browserSync.init({
        server: "./src"
    });

    gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss'], ['sass']);
    gulp.watch("src/*.php").on('change', browserSync.reload);
});

gulp.task('default', ['js', 'serve']);