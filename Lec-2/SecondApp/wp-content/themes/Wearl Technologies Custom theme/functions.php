<?php 

//style and script enqueuing
function wearl_technologies_custom_theme_scripts(){
    // Enqueue styles
    wp_enqueue_style('wearl-style', get_stylesheet_uri());
    wp_enqueue_style('templatemo-neural-style', get_template_directory_uri(). '/templatemo-neural-style.css');

    // Enqueue scripts
    wp_enqueue_script('templatemo-neural-scripts', get_template_directory_uri() . '/templatemo-neural-scripts.js', array(), '1.1', true);
}
add_action('wp_enqueue_scripts', 'wearl_technologies_custom_theme_scripts');


function register_wearl_technologies_theme(){
// menu register
    register_nav_menus(
        array(
        'primary-menu' => __('Primary Menu'),
        'footer-menu' => __('Footer Menu')
        )
    );
}
// attach with action hook
    add_action("init", "register_wearl_technologies_theme");


// logo default setup

function wearl_technologies_custom_theme_logo_setup(){
    $defaults = array(
        'height'      => 50,
        'width'       => 200,
        // 'flex-height' => true,
        // 'flex-width'  => true,
        // 'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'wearl_technologies_custom_theme_logo_setup' );

?>