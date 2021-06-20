'use strict'; // eslint-disable-line

const { default: ImageminPlugin } = require('imagemin-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');

const glob = require('glob-all');
const PurgecssPlugin = require('purgecss-webpack-plugin');

const config = require('./config');

class TailwindExtractor {
  static extract(content) {
    return content.match(/[A-z0-9-:\/]+/g) || [];
  }
}

module.exports = {
  plugins: [
    new ImageminPlugin({
      optipng: { optimizationLevel: 2 },
      gifsicle: { optimizationLevel: 3 },
      pngquant: { quality: '65-90', speed: 4 },
      svgo: {
        plugins: [
          { removeUnknownsAndDefaults: false },
          { cleanupIDs: false },
          { removeViewBox: false },
        ],
      },
      plugins: [imageminMozjpeg({ quality: 75 })],
      disable: config.enabled.watcher,
    }),
    new PurgecssPlugin({
      paths: glob.sync([
        'plugins/**/*.php',
        'app/**/*.php',
        'app/**/*.blade.php',
        'resources/views/**/*.php',
        'resources/assets/scripts/**/*.js',
      ]),
      extractors: [
        {
          extractor: TailwindExtractor,
          extensions: ['js', 'php'],
        },
      ],
      whitelist: [
        // Only if you need it!
        'pr3',
        'pv2',
        'ph3',
        'mb1',
        'input',
        'tracked-mega',
      ],
    }),
    new UglifyJsPlugin({
      uglifyOptions: {
        ecma: 5,
        compress: {
          warnings: true,
          drop_console: true,
        },
      },
    }),
  ],
};
