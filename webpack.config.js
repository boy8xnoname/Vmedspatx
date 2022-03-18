const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    mode: 'development',
    watch: true,
    entry: [
        './vmedspatx/assets/sass/style.scss'
    ],
    output: {
        filename: '[name]',
        path: path.resolve(__dirname, 'dist'),
    },
    module: {
        rules: [{
            test: /\.(sa|sc)ss$/,
            use: [
                MiniCssExtractPlugin.loader,
                'css-loader',
                'sass-loader'
            ]
        }]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '../vmedspatx/style.css',
        })
    ],
    // output: {
    //     filename: 'wcha-frontend.js',
    //     path: path.resolve(__dirname, './assets/js/'),
    // },
};