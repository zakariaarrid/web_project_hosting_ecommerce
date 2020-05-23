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
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
     'resources/assets/css/animate.min.css',
     'resources/assets/css/arabic-style.css',
     'resources/assets/css/bootstrap.min.css',
     'resources/assets/css/bootstrap.rtl.min.css',
     'resources/assets/css/bootstrap-slider.min.css',
     'resources/assets/css/hs.megamenu.css',
     'resources/assets/css/jquery.mb.YTPlayer.min.css',
     'resources/assets/css/magnific-popup.css',
     'resources/assets/css/owl.carousel.min.css',
     'resources/assets/css/owl.theme.default.min.css',
     'resources/assets/css/responsive.css',
     'resources/assets/css/style.css',
     'resources/assets/css/themify-icons.css',
], 'public/css/libs.css');

mix.scripts([
    'resources/assets/js/jquery-3.4.1.min.js',
    'resources/assets/js/popper.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/bootstrap.rtl.min.js',
    'resources/assets/js/bootstrap.slider.min.js',
    'resources/assets/js/jquery.countdown.min.js',
    'resources/assets/js/jquery.easing.min.js',
    'resources/assets/js/jquery.mb.YTPlayer.min.js',
    'resources/assets/js/headroom.min.js',
    'resources/assets/js/hs.megamenu.js',
    'resources/assets/js/jquery.magnific-popup.min.js',
    'resources/assets/js/owl.carousel.min.js',
    'resources/assets/js/scripts.js',
    'resources/assets/js/wow.min.js'
], 'public/js/libs.js');

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/bootstrap-slider.min.css',
    'resources/assets/css/magnific-popup.css',
    'resources/assets/css/themify-icons.css',
    'resources/assets/css/hs.megamenu.css',
    'resources/assets/css/animate.min.css',
    'resources/assets/css/jquery.mb.YTPlayer.min.css',
    'resources/assets/css/owl.carousel.min.css',
    'resources/assets/css/owl.theme.default.min.css',
    'resources/assets/css/style_fr.css',
    'resources/assets/css/responsive_fr.css',
], 'public/css/libs_fr.css');

mix.scripts([
    'resources/assets/js/jquery-3.4.1.min.js',
    'resources/assets/js/popper.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/bootstrap.slider.min.js',
    'resources/assets/js/jquery.countdown.min.js',
    'resources/assets/js/jquery.easing.min.js',
    'resources/assets/js/jquery.mb.YTPlayer.min.js',
    'resources/assets/js/headroom.min.js',
    'resources/assets/js/hs.megamenu.js',
    'resources/assets/js/jquery.magnific-popup.min.js',
    'resources/assets/js/owl.carousel.min.js',
    'resources/assets/js/scripts.js',
    'resources/assets/js/wow.min.js'
], 'public/js/libs_fr.js');

