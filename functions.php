<?php

    function td_register_styles(){
        $version = wp_get_theme()->get( 'Version' );

        wp_register_style('td_style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
        // wp_enqueue_style('td_style', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), $version, 'all');
        wp_enqueue_style('td_style');

        wp_enqueue_style('td_font_awesome', "https://kit.fontawesome.com/24cd095fb2.js", array(), '5.7.1', 'all');
        wp_enqueue_style('td_font_awesome');
    }

    add_action('wp_enqueue_scripts', 'td_register_styles');

    function td_register_scripts(){
        // need local files for these because allowed memory size is small ???
        // wp_enqueue_scripts('td_bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array(), '5.1.3', true);
        // wp_enqueue_scripts('td_jquery_js', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', 'all');
        // wp_enqueue_scripts('td_popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.2/umd/popper.min.js', array(), '2.11.2', 'all');
    }

    add_action('wp_enqueue_scripts', 'td_register_scripts');

?>
