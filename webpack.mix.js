const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |---------------s-----------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass("resources/views/assets/css/main.scss", "public/assets/css/main.css")

    .styles(
        ["resources/views/assets/libs/boxicons/css/boxicons.css"],
        "public/assets/css/boxicons.css"
    )

    .scripts(
        [
            "resources/views/assets/libs/jquery/jquery-3.6.0.min.js",
            "resources/views/assets/libs/jquery/jquery.mask.min.js",
        ],
        "public/assets/js/libs.js"
    )

    .scripts(["resources/views/assets/js/main.js"], "public/assets/js/main.js")

    .copyDirectory(
        "resources/views/assets/libs/boxicons/fonts",
        "public/assets/fonts"
    )

    .copyDirectory("resources/views/assets/images", "public/assets/images")

    .options({
        processCssUrl: false,
    })

    .version();
