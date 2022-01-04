
// add menu support
add_theme_support('menus');
add_theme_support('widgets');

//Register nav menu

function rt_add_menu(){
    register_nav_menus(
        array(
            'top-menu' => __('Top Menu'),
            'footer-menu' => __('Footer Menu'),
            'secondary-menu' => __('Secondary Menu'),
        )
        );}


// add the hook to make the menu

add_action('init', 'rt_add_menu');