var gulp = require('gulp');
var compass = require('gulp-compass');
var plumber = require('gulp-plumber');
var coffee = require('gulp-coffee');
var concat = require('gulp-concat');
var imagemin = require('gulp-imagemin');
var uglify = require('gulp-uglify');
var rename  = require('gulp-rename');
var gutil = require('gulp-util');
var imageminPngquant = require('imagemin-pngquant');
var livereload = require('gulp-livereload');


var Theme = [
    'wp-content/themes/toolbox/'
];

var imgPaths = {
  imgSource: 'wp-content/themes/toolbox/images/src/',
  imgDestination: 'wp-content/themes/toolbox/images/'
}

var sassSources = [
    'wp-content/themes/toolbox/sass/*.sass'
];

var jsSources = [
  'wp-content/themes/toolbox/js/'
];

gulp.task('styles', function() {
  gulp.src(sassSources)
  .pipe(plumber())
  .pipe(compass({
    config_file: 'config.rb',
    css: Theme+'/css',
    sass: Theme+'/sass',
    image: Theme+'/images'
  }))
  .pipe(gulp.dest(Theme+'/css'))
  .pipe(livereload());
});



gulp.task('scripts', function() {
  gulp.src(jsSources)
  .pipe(concat('script.js'))
  .pipe(uglify())
  .pipe(rename("all-scripts-min.js"))
  .pipe(gulp.dest(Theme+'/js/min'))
  .pipe(livereload());
});



gulp.task('images', function() {
  return gulp.src(imgPaths.imgSource + '**/*.*')
    .pipe(imagemin({
      progressive: true,
      svgoPlugins: [{removeViewBox: false}],
      imageminPngquant: [{quality: '65-80', speed: 4}]
    }))
    .pipe(gulp.dest(imgPaths.imgDestination));

});


gulp.task('watch', function() {
  livereload.listen();
  gulp.watch(Theme+'/js/*.*', ['scripts']);
  gulp.watch(Theme+'/images/**/*.*', ['images']);
  gulp.watch(Theme+'/sass/**/*.*', ['styles']);
});

// Default task
gulp.task('default', ['watch', 'styles', 'scripts', 'images' ]);