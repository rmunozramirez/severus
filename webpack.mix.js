let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([

    'resources/assets/css/libs/toastr.css',
    'resources/assets/css/libs/animate.min.css',
    'resources/assets/css/libs/bootstrap.min.css',
    'resources/assets/css/libs/style.css',
    'resources/assets/css/libs/font-awesome.css',

], 'public/css/libs.css');

mix.scripts([

    'resources/assets/js/libs/jquery-2.1.1.js',
    'resources/assets/js/libs/pace.min.js',
    'resources/assets/js/libs/bootstrap.min.js',
    'resources/assets/js/libs/classie.js',
    'resources/assets/js/libs/cbpAnimatedHeader.js',
    'resources/assets/js/libs/wow.min.js',
    'resources/assets/js/libs/toastr.min.js',
    'resources/assets/js/libs/inspinia.js',

], 'public/js/libs.js');