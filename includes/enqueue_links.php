<?php
// Register all stylesheets and Scripts of the theme
function estsol_enqueue_scripts(){
    // register Stylesheets
    wp_register_style('stylesheet_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css',[],'','all');
    wp_register_style('stylesheet_fontawesom', get_template_directory_uri() . '/assets/font/css/font-awesome.min.css',[],'','all');
    wp_register_style('stylesheet_animate', get_template_directory_uri() . '/assets/css/animate.min.css',[],'','all');
    wp_register_style('stylesheet_custom', get_template_directory_uri() . '/assets/css/style.css',[],'','all');
    wp_register_style('stylesheet_carousel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.css',[],'','all');
    wp_register_style('stylesheet_carouseltheme', get_template_directory_uri() . '/assets/owl-carousel/owl.theme.css',[],'','all');
    wp_register_style('stylesheet_isotope', get_template_directory_uri() . '/assets/css/isotope-docs.css',[],'','screen');
    wp_register_style('stylesheet_baguettebox', get_template_directory_uri() . '/assets/css/baguetteBox.css',[],'','all');
    // Register Scripts
    wp_register_script('isotope', get_template_directory_uri() . '/assets/js/isotope-docs.min.js', ['jquery'],false,true);
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'],false,true);
    wp_register_script('easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', ['jquery'],false,true);
    wp_register_script('fittext', get_template_directory_uri() . '/assets/js/jquery.fittext.js', ['jquery'],false,true);
    wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', [],false,true);
    wp_register_script('carosel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.js', [],false,true);
    wp_register_script('bagurttebox', get_template_directory_uri() . '/assets/js/baguetteBox.js', [],false,true);
    wp_register_script('plugin', get_template_directory_uri() . '/assets/js/plugins.js', [],false,true);
    wp_register_script('custom-theme', get_template_directory_uri() . '/assets/js/creative.js', [],false,true);
    wp_register_script('nicescroll', get_template_directory_uri() . '/assets/js/jquery.nicescroll.min.js', ['jquery'],false,true);
    // Enqueue script
    wp_enqueue_script('isotope');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('easing');
    wp_enqueue_script('fittext');
    wp_enqueue_script('wow');
    wp_enqueue_script('carosel');
    wp_enqueue_script('bagurttebox');
    wp_enqueue_script('plugin');
    wp_enqueue_script('custom-theme');
    wp_enqueue_script('nicescroll');
    // Enqueue Style Sheets
    wp_enqueue_style('stylesheet_bootstrap');
    wp_enqueue_style('stylesheet_fontawesom');
    wp_enqueue_style('stylesheet_animate');
    wp_enqueue_style('stylesheet_custom');
    wp_enqueue_style('stylesheet_carousel');
    wp_enqueue_style('stylesheet_carouseltheme');
    wp_enqueue_style('stylesheet_isotope');
    wp_enqueue_style('stylesheet_baguettebox');
}
// hook for add script in core script
add_action('wp_enqueue_scripts', 'estsol_enqueue_scripts');