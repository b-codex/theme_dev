<?php
// add widget support
add_theme_support('widgets');

// add widget
function noobDev_add_sidebar(){
    

    $heading = get_theme_mod( 'ocean_sidebar_widget_heading_tag', 'h4' );
    $heading = apply_filters( 'ocean_sidebar_widget_heading_tag', $heading );

    $foo_heading = get_theme_mod( 'ocean_footer_widget_heading_tag', 'h4' );
    $foo_heading = apply_filters( 'ocean_footer_widget_heading_tag', $foo_heading );

    // Default Sidebar.
    register_sidebar(
        array(
            'name'          => esc_html__( 'Default Sidebar', 'oceanwp' ),
            'id'            => 'sidebar',
            'description'   => esc_html__( 'Widgets in this area will be displayed in the left or right sidebar area if you choose the Left or Right Sidebar layout.', 'oceanwp' ),
            'before_widget' => '<div id="%1$s" class="sidebar-box %2$s clr">',
            'after_widget'  => '</div>',
            'before_title'  => '<' . $heading . ' class="widget-title">',
            'after_title'   => '</' . $heading . '>',
        )
    );

    // Left Sidebar.
    register_sidebar(
        array(
            'name'          => esc_html__( 'Left Sidebar', 'oceanwp' ),
            'id'            => 'sidebar-2',
            'description'   => esc_html__( 'Widgets in this area are used in the left sidebar region if you use the Both Sidebars layout.', 'oceanwp' ),
            'before_widget' => '<div id="%1$s" class="sidebar-box %2$s clr">',
            'after_widget'  => '</div>',
            'before_title'  => '<' . $heading . ' class="widget-title">',
            'after_title'   => '</' . $heading . '>',
        )
    );

    // Search Results Sidebar.
    if ( get_theme_mod( 'ocean_search_custom_sidebar', true ) ) {
        register_sidebar(
            array(
                'name'          => esc_html__( 'Search Results Sidebar', 'oceanwp' ),
                'id'            => 'search_sidebar',
                'description'   => esc_html__( 'Widgets in this area are used in the search result page.', 'oceanwp' ),
                'before_widget' => '<div id="%1$s" class="sidebar-box %2$s clr">',
                'after_widget'  => '</div>',
                'before_title'  => '<' . $heading . ' class="widget-title">',
                'after_title'   => '</' . $heading . '>',
            )
        );
    }

    // Footer 1.
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 1', 'oceanwp' ),
            'id'            => 'footer-one',
            'description'   => esc_html__( 'Widgets in this area are used in the first footer region.', 'oceanwp' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s clr">',
            'after_widget'  => '</div>',
            'before_title'  => '<' . $foo_heading . ' class="widget-title">',
            'after_title'   => '</' . $foo_heading . '>',
        )
    );

    // Footer 2.
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 2', 'oceanwp' ),
            'id'            => 'footer-two',
            'description'   => esc_html__( 'Widgets in this area are used in the second footer region.', 'oceanwp' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s clr">',
            'after_widget'  => '</div>',
            'before_title'  => '<' . $foo_heading . ' class="widget-title">',
            'after_title'   => '</' . $foo_heading . '>',
        )
    );

    // Footer 3.
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 3', 'oceanwp' ),
            'id'            => 'footer-three',
            'description'   => esc_html__( 'Widgets in this area are used in the third footer region.', 'oceanwp' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s clr">',
            'after_widget'  => '</div>',
            'before_title'  => '<' . $foo_heading . ' class="widget-title">',
            'after_title'   => '</' . $foo_heading . '>',
        )
    );

    // Footer 4.
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 4', 'oceanwp' ),
            'id'            => 'footer-four',
            'description'   => esc_html__( 'Widgets in this area are used in the fourth footer region.', 'oceanwp' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s clr">',
            'after_widget'  => '</div>',
            'before_title'  => '<' . $foo_heading . ' class="widget-title">',
            'after_title'   => '</' . $foo_heading . '>',
        )
    );
;
        register_sidebar(
            array(
                'name' => __('Blog sidebar', 'noobdevtheme'),
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
    wp_enqueue_style('noobdev-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), "4.5.2");
    wp_enqueue_style('noobdev-popup', get_template_directory_uri() . "/assets/css/magnific-popup.min.css", array(), "1.1.0");
    wp_enqueue_style('noobdev-font', "https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic", array(), "1.0");
    
}
// hook  action
add_action('wp_enqueue_scripts', 'noobDev_register_styles');

function noobDev_register_scripts()
{
    /* Bootstrap core Js*/
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('noobdev-script', get_template_directory_uri() . "/script.js", $version, $version, "all");
    wp_enqueue_script('noobdev-jquery-popup', get_template_directory_uri() . "/assets/js/24cd095fb2.js", $version, "4.5.2", true);
    wp_enqueue_script('noobdev-bootstrap-jquery', get_template_directory_uri() . "/assets/js/jquery-3.5.1.min.js", $version, "3.5.1", true);
    wp_enqueue_script('noobdev-bootstrap-bundle', get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", $version, "4.5.2", true);
    wp_enqueue_script('noobdev-bootstrap-min', get_template_directory_uri() . "/assets/js/bootstrap.min.js", $version, "4.5.2", true);
    wp_enqueue_script('noobdev-jquery-min', get_template_directory_uri() . "/assets/js/jquery.easing.min.js", $version, "1.4.1", true);
    wp_enqueue_script('noobdev-jquery-popup', get_template_directory_uri() . "/assets/js/jquery.magnific-popup.min.js", $version, "1.1.0", true);
    wp_enqueue_script('noobdev-jquery-popup', get_template_directory_uri() . "/assets/js/all.js", $version, "4.5.2", true);

}
// hook action
add_action('wp_enqueue_scripts', 'noobDev_register_scripts');

function noobdevtheme_customize_register($wp_customize){
    $wp_customize->add_section('bg_color',array(
        'title' => __("Body Background color", 'noobdevtheme'),
        "priority" => 2
    ));
    $wp_customize->add_setting('sit_title',array(
        'default' =>'#fff',
        "transport" => "refresh"
    ));$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'body_background_color',array(
        "label" => __("Body bg color", 'noobdevtheme'),
        "section "=> 'bg_color',
        "settings" => 'body_bg'

    )));

    $wp_customize->add_section('title',array(
        'title' => __("Change Title", "noobdevtheme"),
        "priority" => 1
    ));
    $wp_customize->add_setting('site_title',array(
        'default' =>__("Welcome to theme customization"),
        "transport" => "refresh"
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'theme_customization',array(
        "label" => _("Change Title", "noobdevtheme"),
        "section "=> 'title',
        "settings" => 'site_title'

    )));
}
?>
