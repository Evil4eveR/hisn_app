const mix = require("laravel-mix");

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
// pkg to compress images

require("laravel-mix-imagemin");

const src = "src/",
	dist = "dist/";

mix
	.js(`${src}js/bundle.js`, `${dist}js/bundle.js`)
	.js(`${src}js/script.js`, `${dist}js/script.js`)
	.sass(`${src}scss/bundle.scss`, `${dist}css/bundle.css`)
	.sass(`${src}scss/style.scss`, `${dist}css/style.css`);
//	.imagemin(`${src}imgs/*.*`)
//	.copy(`${src}imgs`, `${dist}imgs`);

mix.options({
	hmrOptions: {
		host: "localhost",
		port: 8070
	}
});

mix.webpackConfig({
	devServer: {
		port: 8070
	}
});
