const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .vue() // Enable Vue.js support
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);
