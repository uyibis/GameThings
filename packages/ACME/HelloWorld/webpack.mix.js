const mix = require("laravel-mix");

if (typeof mix == "undefined") {
    const { mix } = require("laravel-mix");
}

require("laravel-mix-merge-manifest");

if (mix.inProduction()) {
    var publicPath = "../../../public/vendor/webkul/helloworld/assets";
} else {
    var publicPath = "../../../public/vendor/webkul/helloworld/assets";
}

mix.setPublicPath(publicPath).mergeManifest();

mix.disableNotifications();

mix.js('src/Resources/assets/js/app.js', 'js') // Entry point and output path
    .vue()
    .copyDirectory('src/Resources/assets/images', 'images')
    .copy('src/Resources/assets/css/app.css', 'css')
    .sass('src/Resources/assets/sass/app.scss', 'css')
    .options({
        processCssUrls: false,
    });

if (mix.inProduction()) {
    mix.version();
}
