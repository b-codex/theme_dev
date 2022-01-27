<?php
// add widget support
add_theme_support('widgets');

// add widget
function noobDev_add_sidebar(){
    register_sidebar(
        array(
            'name' => __('Primary sidebar', 'NoobDev'),
            'id' => 'Primary-sidebar', 
            'before_widget'=> '<div>',
            'after_widget'=> '<div>',
            'before_title'=> '<h2 class= "widget-title">',
            'after_title'=> '</h2>',

        )
        );
        register_sidebar(
            array(
                'name' => __('Blog sidebar', 'NoobDev'),
                'id' => 'Blog-sidebar', 
                'before_widget'=> '<div>',
                'after_widget'=> '<div>',
                'before_title'=> '<h2 class= "widget-title">',
                'after_title'=> '</h2>',
    
            )
            );
}
// add action
add_action('widget_init', 'noobDev_add_sidebar');

// function for dynamic title tag support
function noobDev_theme_support(){

    // add custom logo
    add_theme_support('custom-logo');
    // add features image support
    add_theme_support('post-thumbnails');
    // add dynamic title tag support
    add_theme_support('title-tag');
}
// adding hook for the above theme support for the title tag
add_action('after_setup_theme', 'noobDev_theme_support');

function noobDev_menus(){
    $locations = array(
        'primary' => "Primary menu ",
        'footer' => "footer menu ",
    );
    register_nav_menus($locations);
}

// adding hook for the menu function
add_action('init', 'noobDev_menus');

function noobDev_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('noobdev-style', get_template_directory_uri()."/style.css",$version,"all");
    wp_enqueue_style('noobdev-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css",array(),"4.5.2");
    wp_enqueue_style('noobdev-font',"https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic",array(),"1.0");
    wp_enqueue_style('noobdev-popup',"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css",array(),"1.1.0");
    wp_enqueue_script('nobdev-jquery-popup',"https://kit.fontawesome.com/24cd095fb2.js", array(),"4.5.2",true);

}
// hook  action 
add_action('wp_enqueue_scripts', 'noobDev_register_styles');

function noobDev_register_scripts(){
    /* Bootstrap core Js*/
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('noobdev-script', get_template_directory_uri()."/script.js",array(),$version,"all");
    wp_enqueue_script('nobdev-bootstrap-jquery',"https://code.jquery.com/jquery-3.5.1.min.js", array(),"3.5.1",true);
    wp_enqueue_script('nobdev-bootstrap-bundle',"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js", array(),"4.5.2",true);
    wp_enqueue_script('nobdev-bootstrap-min',"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array(),"4.5.2",true);
    wp_enqueue_script('nobdev-jquery-min',"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js", array(),"1.4.1",true);
    wp_enqueue_script('nobdev-jquery-popup',"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js", array(),"1.1.0",true);
    wp_enqueue_script('nobdev-jquery-popup',"https://use.fontawesome.com/releases/v5.12.1/js/all.js" , array(),"4.5.2",true);
    
}
// hook action
add_action('wp_enqueue_scripts', 'noobDev_register_scripts');
