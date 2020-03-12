const mix = require("laravel-mix");
const LiveReloadPlugin = require("webpack-livereload-plugin");

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

mix.js("resources/js/example.js", "public/js")
    .js("resources/js/app.js", "public/js")
    .sass("resources/sass/example.scss", "public/css")
    .sass("resources/sass/guideline.sass", "public/css")
    .sass("resources/sass/index.sass", "public/css")
    .options({
        autoprefixer: {
            options: {
                browsers: ["last 6 versions"]
            }
        }
    })
    .version();

// mix.webpackConfig({
//   plugins: [
//       new LiveReloadPlugin()
//   ]
// });

// https://browsersync.io/docs/options/
mix.browserSync({
    proxy: "http://localhost:8000/static/"
});
