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
    mix.copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts');
    mix.copy('node_modules/summernote/dist/font', 'public/css/font');
    mix.scripts([
        "../../../node_modules/summernote/dist/summernote.js",
        "../../../node_modules/summernote/dist/lang/summernote-ru-RU.js",
        "../../../node_modules/bootstrap-datepicker/js/locales/bootstrap-datepicker.ru.js",
        "main.js"
    ], 'public/js/main.js');
    mix.scripts([
        "../template_Shuffle/js/jquery.sticky.js",
        "../template_Shuffle/js/jquery.flexslider-min.js",
        "../template_Shuffle/js/jquery.easing.min.js",
        "../template_Shuffle/js/jquery.scrollTo.js",
        "../template_Shuffle/js/jquery.appear.js",
        "../template_Shuffle/js/stellar.js",
        "../template_Shuffle/js/wow.min.js",
        "../template_Shuffle/js/owl.carousel.min.js",
        "../template_Shuffle/js/nivo-lightbox.min.js",
        "../template_Shuffle/custom.js"
    ], 'public/js/template.js');

    mix.styles([
        '../../../node_modules/summernote/dist/summernote.css',
        '../../../node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css',
        "../template_Shuffle/css/animate.css",
        "../template_Shuffle/css/flexslider.css",
        "../template_Shuffle/css/nivo-lightbox.css",
        "../template_Shuffle/css/owl.carousel.css",
        "../template_Shuffle/css/owl.theme.css",
        "../template_Shuffle/css/style.css",
    ],'resources/assets/sass/template/templateAll.css'
);
    mix.sass('app.scss');
    mix.webpack('app.js');

});