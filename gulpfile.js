'use strict'

const config = require('./config')
const gulp = require('gulp')
const bs = require('browser-sync')
const $ = require('gulp-load-plugins')()
const autoprefixer = require('autoprefixer')
const mqpacker = require('css-mqpacker')
const assets = require('postcss-assets')

gulp.task('sass', () => {
  return gulp
    .src(config.sass.src)
    .pipe($.plumber())
    .pipe($.sourcemaps.init())
    .pipe($.sassGlob())
    .pipe($.sass({ outputStyle: 'expanded' }))
    .pipe($.postcss([autoprefixer(), mqpacker({ sort: true }), assets({ loadPaths: config.postcss.paths })]))
    .pipe(
      $.sourcemaps.write(config.sourcemap.write, {
        includeContent: false,
        sourceRoot: config.sourcemap.src
      })
    )
    .pipe(gulp.dest(config.sass.dest))
})

gulp.task('check-domain', () => {
  return gulp.src(config.translate.src).pipe(
    $.checktextdomain({
      text_domain: config.translate.textDomain, // eslint-disable-line camelcase
      keywords: [
        '__:1,2d',
        '_e:1,2d',
        '_x:1,2c,3d',
        'esc_html__:1,2d',
        'esc_html_e:1,2d',
        'esc_html_x:1,2c,3d',
        'esc_attr__:1,2d',
        'esc_attr_e:1,2d',
        'esc_attr_x:1,2c,3d',
        '_ex:1,2c,3d',
        '_n:1,2,4d',
        '_nx:1,2,4c,5d',
        '_n_noop:1,2,3d',
        '_nx_noop:1,2,3c,4d'
      ]
    })
  )
})

gulp.task('translate', () => {
  return gulp
    .src(config.translate.src)
    .pipe(
      $.wpPot({
        domain: config.translate.textDomain
      })
    )
    .pipe(gulp.dest(config.translate.languageFile))
})

gulp.task('bs', () => {
  bs.init({
    files: config.watch.css,
    proxy: config.proxy,
    open: false
  })
})

gulp.task('bs-reload', done => {
  bs.reload()
  done()
})

gulp.task('watch', () => {
  gulp.watch(config.watch.sass, gulp.series('sass'))
  gulp.watch(config.watch.js, gulp.series('bs-reload'))
  gulp.watch(config.watch.php, gulp.series('bs-reload'))
})

gulp.task('zip', () => {
  return gulp
    .src(config.zip.src)
    .pipe($.zip(config.zip.dest))
    .pipe(gulp.dest('dist'))
})

gulp.task('pack-js', function() {
  return gulp
    .src(config.build.src.js)
    .pipe(
      $.minify({
        ext: {
          min: '.min.js'
        }
      })
    )
    .pipe(gulp.dest(config.build.dest.js))
})

gulp.task('pack-css', function() {
  return gulp
    .src(config.build.src.css)
    .pipe($.cleanCss())
    .pipe(
      $.rename({
        suffix: '.min'
      })
    )
    .pipe(gulp.dest(config.build.dest.css))
})

gulp.task('build', gulp.series('pack-js', 'pack-css', 'translate', 'zip'))

gulp.task('default', gulp.parallel('bs', 'sass', 'watch'))
