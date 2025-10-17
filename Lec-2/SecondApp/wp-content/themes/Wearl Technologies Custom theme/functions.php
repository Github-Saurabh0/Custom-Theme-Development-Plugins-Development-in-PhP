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

?>