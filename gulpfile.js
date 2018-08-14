const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

// elixir((mix) => {
//     mix.sass('app.scss')
//        .webpack('app.js');
// });

elixir(function (mix) {

    //template files
    mix.copy('resources/assets/fonts/template', 'public/fonts/template');
    mix.copy([
            'resources/assets/js/template/jquery.min.js',
            'resources/assets/js/template/bootstrap.min.js',
            'resources/assets/js/template/jquery.sticky.js',
            'resources/assets/js/template/jquery.flexslider-min.js',
            'resources/assets/js/template/jquery.easing.min.js',
            'resources/assets/js/template/jquery.scrollTo.js',
            'resources/assets/js/template/jquery.appear.js',
            'resources/assets/js/template/stellar.js',
            'resources/assets/js/template/wow.min.js',
            'resources/assets/js/template/owl.carousel.min.js',
            'resources/assets/js/template/nivo-lightbox.min.js',
            'resources/assets/js/template/custom.js'
        ]
        , 'public/js/template');


    mix.copy('resources/assets/img', 'public/img');
    mix.styles(['template/'], 'public/css/template.css');

    mix.webpack([
        'main.js',
    ], 'resources/assets/js/all.js');
    // mix.webpack('app.js')
    mix.webpack([
        // 'resources/assets/js/template/jquery.min.js',
        // 'resources/assets/js/template/bootstrap.min.js',
        'resources/assets/js/template/jquery.sticky.js',
        // 'resources/assets/js/template/jquery.flexslider-min.js',
        // 'resources/assets/js/template/jquery.easing.min.js',
        'resources/assets/js/template/jquery.scrollTo.js',
        'resources/assets/js/template/jquery.appear.js',
        'resources/assets/js/template/stellar.js',
        // 'resources/assets/js/template/wow.min.js',
        // 'resources/assets/js/template/owl.carousel.min.js',
        // 'resources/assets/js/template/nivo-lightbox.min.js',
        'resources/assets/js/template/custom.js'
    ], 'public/js/libs.js');

});