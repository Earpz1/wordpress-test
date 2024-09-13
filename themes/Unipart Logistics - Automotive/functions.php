<?php

function load_styling() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('automotive-js-file', get_theme_file_uri('js.js'), array('jquery'), null, true);
}

function unipart_features() {
    register_nav_menu('headerMenu', 'Main Header Navigation');
    register_nav_menu('footerSiteMap', 'Unipart Group Site Map Footer');
    
}

add_action('after_setup_theme', 'unipart_features');
add_action('wp_enqueue_scripts', 'load_styling');
add_theme_support('post-thumbnails');
add_filter('show_admin_bar', '__return_false');


?>
