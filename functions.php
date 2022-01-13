<?php
// add menu support
add_theme_support('menus');

// function for dynamic title tag support
function noobDev_theme_support()
{
    // add custom logo
    add_theme_support('custom-logo');
    // add features image support
    add_theme_support('post-thumbnails');
    // add dynamic title tag support
    add_theme_support('title-tag');
}
// adding hook for the above theme support for the title tag
add_action('after_setup_theme', 'noobDev_theme_support');

function noobDev_menus()
{
    $locations = array(
        'primary' => "Primary menu ",
        'footer' => "footer menu ",
    );
    register_nav_menus($locations);
}

// adding hook for the menu function
add_action('init', 'noobDev_menus');

function noobDev_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('noobdev-style', get_template_directory_uri() . "/style.css", $version, "all");
    wp_enqueue_style('noobdev-bootstrap', get_template_directory_uri() . "assets/css/bootstrap.min.css", array(), "4.5.2");
    wp_enqueue_style('noobdev-popup', get_template_directory_uri() . "assets/css/magnific-popup.min.css", array(), "1.1.0");
    wp_enqueue_style('noobdev-font', "https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic", array(), "1.0");
    
}
// hook  action
add_action('wp_enqueue_scripts', 'noobDev_register_styles');

function noobDev_register_scripts()
{
    /* Bootstrap core Js*/
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('noobdev-script', get_template_directory_uri() . "/script.js", array(), $version, "all");
    wp_enqueue_script('noobdev-jquery-popup', get_template_directory_uri() . "assets/js/24cd095fb2.js", array(), "4.5.2", true);
    wp_enqueue_script('noobdev-bootstrap-jquery', get_template_directory_uri() . "assets/js/jquery-3.5.1.min.js", array(), "3.5.1", true);
    wp_enqueue_script('noobdev-bootstrap-bundle', get_template_directory_uri() . "assets/js/bootstrap.bundle.min.js", array(), "4.5.2", true);
    wp_enqueue_script('noobdev-bootstrap-min', get_template_directory_uri() . "assets/js/bootstrap.min.js", array(), "4.5.2", true);
    wp_enqueue_script('noobdev-jquery-min', get_template_directory_uri() . "assets/js/jquery.easing.min.js", array(), "1.4.1", true);
    wp_enqueue_script('noobdev-jquery-popup', get_template_directory_uri() . "assets/js/jquery.magnific-popup.min.js", array(), "1.1.0", true);
    wp_enqueue_script('noobdev-jquery-popup', get_template_directory_uri() . "assets/js/all.js", array(), "4.5.2", true);

}
// hook action
add_action('wp_enqueue_scripts', 'noobDev_register_scripts');
