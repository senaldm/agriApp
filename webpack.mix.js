const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
// from
edit.png
// TO
edit-message.png
// from
add-reaction.svg
//to
add-reaction-message.svg
mix.webpackConfig({
    module: {
        rules: [
          {
            test: /\.wav$/i,
            use: [
              {
                loader: 'file-loader',
              },
            ],
          },
        ],
      },
    })
