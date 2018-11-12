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

    mix.copy('resources/assets/img', 'public/img');
    mix.styles(['template/'], 'public/css/template.css');
    mix.styles([
        '../../../node_modules/bootstrap-datepicker/dist/css/'], 'public/css/libs.css');

    // mix.webpack([
    //     'main.js',
    // ], 'resources/assets/js/all.js');
    // mix.webpack('app.js', 'resources/assets/js/app.js');
    mix.webpack('app.js', 'public/js/app.js');
    // mix.webpack('libs.js', 'resources/assets/js/libs/libs.js');
    // mix.webpack('main.js', 'public/js/main.js');
    mix.scripts([
        "../../../node_modules/bootstrap-datepicker/js/locales/bootstrap-datepicker.ru.js",
        "dt.js"
    ], 'public/js/main.js');


    mix.scripts([
        // "../template_Shuffle/js/jquery.min.js",
        // "../template_Shuffle/js/jquery.sticky.js",
        // "../template_Shuffle/js/jquery.flexslider-min.js",
        // "../template_Shuffle/js/jquery.easing.min.js",
        // "../template_Shuffle/js/jquery.scrollTo.js",
        // "../template_Shuffle/js/jquery.appear.js",
        // "../template_Shuffle/js/stellar.js",
        // "../template_Shuffle/js/wow.min.js",
        // "../template_Shuffle/js/owl.carousel.min.js",
        "../../../node_modules/wowjs/dist/wow.min.js",
        "../template_Shuffle/custom.js"
    ], 'public/js/template.js');


});