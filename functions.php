<?php



function studiored_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'studiored_theme_support');

function studiored_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('studiored-style-main', get_template_directory_uri() . "/style.css",array(),rand(111,9999),'all');
    wp_enqueue_style('studiored-style-pages', get_template_directory_uri() . "/assets/css/nav-links.css",array(),rand(111,9999),'all');
    wp_enqueue_style('studiored-style-navigation', get_template_directory_uri() . "/assets/css/navigation.css",array(),rand(111,9999),'all');
    wp_enqueue_style('studiored-style-footer', get_template_directory_uri() . "/assets/css/footer.css",array(),rand(111,9999),'all');
    wp_enqueue_style('studiored-style-template', get_template_directory_uri() . "/assets/css/template.css",array(),rand(111,9999),'all');
}

add_action('wp_enqueue_scripts', 'studiored_register_styles');

function studiored_register_scripts(){
    wp_enqueue_script('studiored-script-navigation', get_template_directory_uri() . "/assets/js/nav.js",array(),rand(111,9999),'all');
}

add_action('wp_enqueue_scripts', 'studiored_register_scripts');

function dirlist( $path, $include_hidden = true, $recursive = false ) {
    return false;
}

?>