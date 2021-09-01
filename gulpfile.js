const { series, src, dest, parallel, watch } = require('gulp');
const maps = require('gulp-sourcemaps');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
// const imagemin = require('gulp-imagemin');
const browserSync = require('browser-sync');
const cleanCSS = require('gulp-clean-css');
const rename = require("gulp-rename");
const webpack = require('gulp-webpack');
sass.compiler = require('sass');
const postcss = require('gulp-postcss');
const server = browserSync.create();

const paths = {
    scss: {
      src: ["src/assets/scss/*.scss"],
      watcher: ["src/assets/scss/**/*"],
      dest: "dist/assets/css/",
    },
    css: {
      src: ["dist/assets/css/style.css"],
      dest: "dist/assets/css/",
    },
    images: {
      src: "src/assets/images/**/*.{jpg, jpeg, svg, png, gif}",
      dest: "dist/assets/images/",
    },
    scripts: {
      src: ["src/assets/js/main.js"],
      watcher: ["src/assets/js/**/*"],
      dest: "dist/assets/js/",
    },
    other: {
      src: [
        "src/assets/**/*.*",
        "!src/assets/scss/**/**",
        "!src/assets/js/**/**",
        "!src/assets/images/**/**",
      ],
      watcher: ["**/*.php"],
      dest: "dist/assets/",
    },
  };


// Gulp Pipe for compiling SASS main file
function styleScss() {
    return src('./src/assets/scss/style.scss')
      .pipe(maps.init())
      .pipe(sass().on("Ha habido un problema compilando", sass.logError))
      .pipe(maps.write())
      .pipe(autoprefixer())
      .pipe(dest(paths.scss.dest))
      .pipe(server.stream());
};

// Gulp Pipe for minifying CSS main file
function styleCss() {
    return src(paths.css.src)
      .pipe(postcss([
        require('tailwindcss')
        // require('autoprefixer')
      ]))
      .pipe(maps.init())
      .pipe(maps.write())
      // .pipe(cleanCSS())
      .pipe(rename("style.min.css"))
      .pipe(dest(paths.css.dest))
};

//Gulp Pipe for minifying images and copying to dist folder
function images() {
  return src(paths.images.src)
    .pipe(
        imagemin([
          imagemin.gifsicle({ interlaced: true }),
          imagemin.jpegtran({ progressive: true }),
          imagemin.optipng({ optimizationLevel: 5 }),
        ])
      )
    .pipe(dest(paths.images.dest));
}

function bundle() {
  return src('./src/assets/js/main.js')
    .pipe(webpack(
      {
        output: {
          filename: "main.bundle.js",
        },
      }
    ))
    .pipe(dest('./dist/assets/js/'))
}

function watcher() {
    server.init({
      proxy: "http://queens.localhost",
    });
    watch('src/assets/scss/**/*scss', series(styleScss, styleCss) ).on('change', server.reload);
    // watch('src/assets/images/{ *.jpg, *.png, *.svg }', images).on('change', server.reload);
    watch('src/assets/js/**/*.js', bundle).on('change', server.reload);
    watch('./**/*.php').on('change', server.reload);
    watch('tailwind.config.js', series(styleScss, styleCss, bundle)).on('change', server.reload);
};


exports.styleScss = styleScss;
exports.styleCss = styleCss;
exports.images = images;
exports.bundle = bundle;
exports.compile = series(styleScss, styleCss, bundle)
exports.watcher = watcher;