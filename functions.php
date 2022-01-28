<?php
// add widget support
add_theme_support('widgets');

// // add widget
// function noobDev_add_sidebar(){
   
        // register_sidebar(
        //     array(
        //         'name' => __('Blog sidebar', 'noobdevtheme'),
        //         'id' => 'Blog-sidebar', 
        //         'before_widget'=> '<div>',
        //         'after_widget'=> '<div>',
        //         'before_title'=> '<h2 class= "widget-title">',
        //         'after_title'=> '</h2>',
//         register_sidebar(
//             array(
//                 'name' => __('Blog sidebar', 'NoobDev'),
//                 'id' => 'Blog-sidebar', 
//                 'before_widget'=> '<div>',
//                 'after_widget'=> '<div>',
//                 'before_title'=> '<h2 class= "widget-title">',
//                 'after_title'=> '</h2>',
    
//             )
//             );
// }

// // add action
// add_action('widget_init', 'noobDev_add_sidebar');

// add hook for the widget to register it ti thr customization 

// adding widget sidebar to the customize option

function noobDev_widget_sidebar() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

    // sidebar #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Blog-sidebar #1', 'noobDev' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'noobDev' ),
			)
		)
	);

	// Footer sidebar #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'noobDev' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'noobDev' ),
			)
		)
	);

	// Footer sidebar #3.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'noobDev' ),
				'id'          => 'sidebar-3',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'noobDev' ),
			)
		)
	);

    
	// Footer sidebar #4.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #3', 'noobDev' ),
				'id'          => 'sidebar-4',
				'description' => __( 'Widgets in this area will be displayed in the Third column in the footer.', 'noobDev' ),
			)
		)
	);

}

// add hook for the above function to register sidebars
add_action( 'widgets_init', 'noobDev_widget_sidebar' );
// registered the widget to customize option 
add_action('customize_register', 'noobDev_widget_sidebar');


// customize Appearance options

function noobDev_customize_color_register($wp_customize){
    

    // this code here adds it to the database for the header and footer color
    $wp_customize->add_setting('noobDev_hF_color', array(
        'default' => '#f4623a',
        'transport' => 'refresh',
    ));
    // this code here adds it to the database for the background color
    $wp_customize->add_setting('noobDev_background_color', array(
        'default' => '#f4623a',
        'transport' => 'refresh',
    ));

    // this code here adds it to the database for the button color
    $wp_customize->add_setting('noobDev_btn_color', array(
        'default' => '#ceac92',
        'transport' => 'refresh',
    ));
    // this code here adds it to the database for the link color
    $wp_customize->add_setting('noobDev_link_color', array(
        'default' => '#f4623a',
        'transport' => 'refresh',
    ));
    // section is for all color it's like container
    $wp_customize->add_section('noobDev_standard_colors', array(
        'title' => __('Colors', 'NoobDev'), 
        'priority' => 30,
    ));

    // control for link color
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'noobDev_link_color_control', array(
        // wp localization feature
        'label' => __('Link Color', 'NoobDev'),
        'section' => 'noobDev_standard_colors',
        'settings' => 'noobDev_link_color'
    )));
    // controller fro the button color
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'noobDev_btn_color_control', array(
        // wp localization feature
        'label' => __('Button Color', 'NoobDev'),
        'section' => 'noobDev_standard_colors',
        'settings' => 'noobDev_btn_color'
    )));
    // controller for the background color
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'noobDev_background_color_control', array(
        // wp localization feature
        'label' => __('Background Color', 'NoobDev'),
        'section' => 'noobDev_standard_colors',
        'settings' => 'noobDev_background_color'
    )));
     // controller for the header and footer color
     $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'noobDev_header_footer_color_control', array(
        // wp localization feature
        'label' => __('Header & Footer Color', 'NoobDev'),
        'section' => 'noobDev_standard_colors',
        'settings' => 'noobDev_hF_color'
    )));
    // noobDev_hF_color
}

add_action('customize_register', 'noobDev_customize_color_register');

// this function applies the above change to the theme

function noobDev_customize_color_css(){?>
    <style type="text/css">
        a:link,
        a:visited,
    
        {
            color: <?php echo get_theme_mod('noobDev_link_color'); ?>;
            
        }
        /* abiy changeable when abiy finishes  btn-custom */
        .btn-custom,
        .btn-custom:hover {
            background-color: <?php echo get_theme_mod('noobDev_btn_color'); ?>!important;
        }
        body{
            background-color: <?php echo get_theme_mod('noobDev_background_color'); ?>;
        }
        /* color for header and footer */
        .headIcon,
        .footIcon{
            background-color: <?php echo get_theme_mod('noobDev_hF_color'); ?> !important;
            
        }
       


    </style>
<?php }

// adding hook
add_action('wp_head', 'noobDev_customize_color_css');
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
    wp_enqueue_script('noobdev-script', get_template_directory_uri() . "/script.js", array(), $version, "all");
    wp_enqueue_script('noobdev-jquery-popup', get_template_directory_uri() . "/assets/js/24cd095fb2.js", array(), "4.5.2", true);
    wp_enqueue_script('noobdev-bootstrap-jquery', get_template_directory_uri() . "/assets/js/jquery-3.5.1.min.js", array(), "3.5.1", true);
    wp_enqueue_script('noobdev-bootstrap-bundle', get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", array(), "4.5.2", true);
    wp_enqueue_script('noobdev-bootstrap-min', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), "4.5.2", true);
    wp_enqueue_script('noobdev-jquery-min', get_template_directory_uri() . "/assets/js/jquery.easing.min.js", array(), "1.4.1", true);
    wp_enqueue_script('noobdev-jquery-popup', get_template_directory_uri() . "/assets/js/jquery.magnific-popup.min.js", array(), "1.1.0", true);

}
// hook action
add_action('wp_enqueue_scripts', 'noobDev_register_scripts');

function wpdocs_custom_excerpt_length($length)
{
    return 15;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);
