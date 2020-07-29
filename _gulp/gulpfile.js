// Initialize modules
const { src, dest, watch, series, parallel } = require('gulp');

const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const concat = require('gulp-concat');
const postcss = require('gulp-postcss');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');

const svgstore = require('gulp-svgstore');
const svgmin = require('gulp-svgmin');
const path = require('path');
 
// File path variables
const files = {
  scssPath: './scss/**/*.scss',
  jsPath: './js/*/*.js',
  svgPath: './svg/*.svg'
}
 

function svgTask() {
  return src(files.svgPath)
          .pipe(svgmin(function (file) {
              var prefix = path.basename(file.relative, path.extname(file.relative));
              return {
                  plugins: [{
                      cleanupIDs: {
                          prefix: prefix + '-',
                          minify: true
                      }
                  }]
              }
          }))
          .pipe(svgstore({ inlineSvg: true }))
          .pipe(dest('../'));
}






// Sass Task
function scssTask(){
  return src(files.scssPath)
          .pipe(sourcemaps.init())
          .pipe(sass())
          .pipe(postcss([ autoprefixer(), cssnano() ]))
          .pipe(sourcemaps.write('.'))
          .pipe(dest('../'));
}


// JS Task
function jsTask() {
  return src(files.jsPath)
          .pipe(concat('scripts.js'))
          .pipe(uglify())
          .pipe(dest('../js'));
}


// Cachebusting task
const cbString = new Date().getTime();
function cacheBustTask(){
  return src(['index.html'])
          .pipe(replace(/cb=\d+/g, 'cb=' + cbString))
          .pipe(dest('.'));
}

// Watch task
function watchTask() {
  watch([files.scssPath, files.jsPath, files.svgPath], parallel(scssTask, jsTask, svgTask));
}

// Default task
exports.default = series(
  parallel(scssTask, jsTask, svgTask),
  watchTask
);