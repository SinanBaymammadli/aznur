let mix = require("laravel-mix");
const workboxPlugin = require("workbox-webpack-plugin");

const DIST_DIR = "public/";

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

mix.autoload({
  jquery: ["$", "window.jQuery"]
});

mix.webpackConfig({
  module: {
    rules: [
      {
        test: /\.js?$/,
        exclude: /node_modules(?!\/bootstrap)|bower_components/,
        use: [
          {
            loader: "babel-loader",
            options: mix.config.babel()
          }
        ]
      }
    ]
  },
  plugins: [
    new workboxPlugin({
      globDirectory: DIST_DIR,
      globPatterns: ["**/*.{js,css,jpg,png}"],
      swDest: path.join(DIST_DIR, "sw.js")
    })
  ]
});

mix
  .js("resources/assets/js/app.js", "public/js")
  .sass("resources/assets/sass/app.scss", "public/css")
  .copy("resources/assets/img/", "public/img/");

if (mix.inProduction()) {
  mix.version();
}
