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
    // mix.webpack(['app.js','Scripts.js'],'public/js/app.js');
    mix.copy([
        'resources/assets/template_Shuffle/fonts',
        'resources/assets/template_Shuffle/font-awesome/fonts'
        ],'public/fonts');
    mix.copy('resources/assets/template_Shuffle/img','public/img');
    mix.copy('node_modules/bootstrap-sass/assets/fonts','public/fonts');
    mix.sass([
        '../template_Shuffle/font-awesome/css/font-awesome.min.css',
        '../template_Shuffle/css/nivo-lightbox.css',
        '../template_Shuffle/css/nivo-lightbox-theme/default/default.css',
        '../template_Shuffle/css/owl.carousel.css',
        '../template_Shuffle/css/owl.theme.css',
        '../template_Shuffle/css/flexslider.css',
        '../template_Shuffle/css/animate.css',
        '../template_Shuffle/css/style.css',
        '../template_Shuffle/color/color.css'
    ],'resources/assets/sass/template.scss');
    // mix.sass(['template/'], 'resources/assets/sass/template.scss');
    mix.sass('app.scss');
    // mix.copy('resources/assets/fonts','public/fonts/bootstrap');
    mix.webpack(['../template_Shuffle/js'],'resources/assets/js/libs.js');
    mix.webpack(['app.js','libs.js'],'public/js/libs.js');
});