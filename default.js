const THEME_NAME = 'vmedspatx'

module.exports = {
    THEME_NAME,
    proxy: `http://${THEME_NAME}.local`,
    sass: {
        src: `${THEME_NAME}/assets/scss/style.scss`,
        dest: `${THEME_NAME}/`
    },
    postcss: {
        paths: [`${THEME_NAME}/assets/`]
    },
    sourcemap: {
        src: './assets/scss/',
        write: '/assets/sourcemap/'
    },
    translate: {
        src: `${THEME_NAME}/**/*.php`,
        textDomain: THEME_NAME,
        languageFile: `./${THEME_NAME}/languages/${THEME_NAME}.pot`
    },
    watch: {
        css: `${THEME_NAME}/*.css`,
        sass: `${THEME_NAME}/assets/scss/**/*.scss`,
        js: `${THEME_NAME}/assets/js/**/*.js`,
        php: `${THEME_NAME}/**/*.php`
    },
    zip: {
        src: [
            `${THEME_NAME}/**/*`,
            `!${THEME_NAME}/assets/scss/**`,
            `!${THEME_NAME}/assets/sourcemap/**`,
            '!**/*.DS_Store'
        ],
        dest: `${THEME_NAME}.zip`
    },
    build: {
        src: {
            js: `${THEME_NAME}/assets/js/scripts.js`,
            css: `${THEME_NAME}/style.css`
        },
        dest: {
            js: `${THEME_NAME}/assets/js`,
            css: `${THEME_NAME}/`
        }
    }
}