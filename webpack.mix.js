const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
/*main*/
mix.styles([
    'resources/css/reset.min.css',
    'resources/css/general.css',
    'resources/css/header.css',
    'resources/css/video.css',
    'resources/css/to_be_aware.css',
    'resources/css/slider.css',
    'resources/css/events.css',
    'resources/css/svg.css',
    'resources/css/footer.css',
    'resources/css/media.css',
], 'public/css/main_page_styles.css');
mix.scripts([
    'resources/js/jquery-3.6.0.min.js',
    'resources/js/jquery.bpopup.min.js',
    'resources/js/fontawesome-free-5.15.3-web/js/all.min.js',
    'resources/js/function.js',
    'resources/js/main.js',
    'resources/js/slider.js'
], 'public/js/main_page_scripts.js');
/*main end*/


/*news*/
mix.styles([
    'resources/css/reset.min.css',
    'resources/css/general.css',
    'resources/css/header.css',
    'resources/css/footer.css',
    'resources/css/news.css',
    'resources/css/media.css',
    'resources/css/media_not_for_main.css',
], 'public/css/news_page_styles.css');
mix.scripts([
    'resources/js/jquery-3.6.0.min.js',
    'resources/js/fontawesome-free-5.15.3-web/js/all.min.js',
    'resources/js/jquery.bpopup.min.js',
    'resources/js/function.js',
    'resources/js/main.js',
    'resources/js/news.js'
], 'public/js/news_page_scripts.js');
/*news end*/

/*one_news*/
mix.styles([
    'resources/css/reset.min.css',
    'resources/css/general.css',
    'resources/css/header.css',
    'resources/css/footer.css',
    'resources/css/one_news.css',
    'resources/css/media.css',
    'resources/css/media_not_for_main.css',
], 'public/css/one_news_page_styles.css');
mix.scripts([
    'resources/js/jquery-3.6.0.min.js',
    'resources/js/fontawesome-free-5.15.3-web/js/all.min.js',
    'resources/js/jquery.bpopup.min.js',
    'resources/js/function.js',
    'resources/js/main.js',
    'resources/js/one_news.js'
], 'public/js/one_news_page_scripts.js');
/*one_news end*/

/*techbattles*/
mix.styles([
    'resources/css/reset.min.css',
    'resources/css/general.css',
    'resources/css/header.css',
    'resources/css/footer.css',
    'resources/css/techbattles.css',
    'resources/css/media.css',
    'resources/css/media_not_for_main.css',
], 'public/css/techbattles_page_styles.css');
mix.scripts([
    'resources/js/jquery-3.6.0.min.js',
    'resources/js/jquery.bpopup.min.js',
    'resources/js/fontawesome-free-5.15.3-web/js/all.min.js',
    'resources/js/function.js',
    'resources/js/main.js',
    'resources/js/techbattles.js'
], 'public/js/techbattles_page_scripts.js');
/*techbattles end*/

/*gallery*/
mix.styles([
    'resources/css/reset.min.css',
    'resources/css/general.css',
    'resources/css/header.css',
    'resources/css/footer.css',
    'resources/css/media.css',
    'resources/css/gallery.css',
    'resources/css/media_not_for_main.css',
], 'public/css/gallery_page_styles.css');
mix.scripts([
    'resources/js/jquery-3.6.0.min.js',
    'resources/js/jquery.bpopup.min.js',
    'resources/js/fontawesome-free-5.15.3-web/js/all.min.js',
    'resources/js/jgallery-2.2.1/dist/js/jgallery.min.js',
    'resources/js/function.js',
    'resources/js/main.js',
    'resources/js/gallery.js'
], 'public/js/gallery_page_scripts.js');
/*gallery end*/

/*review*/
mix.styles([
    'resources/css/reset.min.css',
    'resources/css/general.css',
    'resources/css/header.css',
    'resources/css/footer.css',
    'resources/css/media.css',
    'resources/css/review.css',
    'resources/css/media_not_for_main.css',
], 'public/css/review_page_styles.css');
mix.scripts([
    'resources/js/jquery-3.6.0.min.js',
    'resources/js/jquery.bpopup.min.js',
    'resources/js/fontawesome-free-5.15.3-web/js/all.min.js',
    'resources/js/function.js',
    'resources/js/main.js',
    'resources/js/masonry.pkgd.min.js',
    'resources/js/jquery.flexslider-min.js',
    'resources/js/review.js'
], 'public/js/review_page_scripts.js');
/*review end*/

/*about*/
mix.styles([
    'resources/css/reset.min.css',
    'resources/css/general.css',
    'resources/css/header.css',
    'resources/css/footer.css',
    'resources/css/media.css',
    'resources/css/about.css',
    'resources/css/media_not_for_main.css',
], 'public/css/about_page_styles.css');
mix.scripts([
    'resources/js/jquery-3.6.0.min.js',
    'resources/js/jquery.bpopup.min.js',
    'resources/js/fontawesome-free-5.15.3-web/js/all.min.js',
    'resources/js/function.js',
    'resources/js/main.js',
    'resources/js/about.js'
], 'public/js/about_page_scripts.js');
/*about end*/

/*search*/
mix.styles([
    'resources/css/reset.min.css',
    'resources/css/general.css',
    'resources/css/header.css',
    'resources/css/footer.css',
    'resources/css/techbattles.css',
    'resources/css/news.css',
    'resources/css/search.css',
    'resources/css/media.css',
    'resources/css/media_not_for_main.css',
], 'public/css/search_page_styles.css');
mix.scripts([
    'resources/js/jquery-3.6.0.min.js',
    'resources/js/fontawesome-free-5.15.3-web/js/all.min.js',
    'resources/js/jquery.bpopup.min.js',
    'resources/js/function.js',
    'resources/js/main.js',
    'resources/js/news.js'
], 'public/js/search_page_scripts.js');
/*search end*/

/*Ruler*/
mix.styles([
    'resources/bigbro/css/adminlte.min.css',
    'resources/bigbro/plugins/fontawesome-free/css/all.min.css',
    'resources/bigbro/css/bigbro_styles.css',
], 'public/bigbro/css/bigbro_page_styles.css');
mix.scripts([
    'resources/bigbro/plugins/jquery/jquery.min.js',
    'resources/bigbro/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/bigbro/plugins/bs-custom-file-input/bs-custom-file-input.min.js',
    'resources/bigbro/js/adminlte.min.js',
    'resources/bigbro/js/demo.js',
    'resources/bigbro/plugins/moment/moment.min.js',
    'resources/bigbro/plugins/inputmask/jquery.inputmask.min.js',
    'resources/bigbro/plugins/inputmask/inputmask.min.js',
], 'public/bigbro/js/bigbro_page_scripts.js');
/*Ruler end*/

/*mix.copyDirectory('resources/img', 'public/img');*/
mix.copyDirectory('resources/bigbro/plugins/fontawesome-free/webfonts', 'public/bigbro/webfonts');
mix.copyDirectory('resources/bigbro/img', 'storage/app/public/bigbro_img');

mix.browserSync('sci.and.tech');
