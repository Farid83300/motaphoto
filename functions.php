<?php
/**
 * Enqueue styles and scripts
 */
function theme_enqueue_styles_scripts() {
    // Enregistrement et chargement du fichier CSS principal
    wp_enqueue_style(
        'main-style', 
        get_stylesheet_directory_uri() . '/style.css',
        array(), 
        filemtime(get_stylesheet_directory() . '/style.css')
    );
    
    // Enregistrement et chargement du fichier JavaScript
    wp_enqueue_script(
        'main-script', 
        get_stylesheet_directory_uri() . '/js/scripts.js', 
        array('jquery'), 
        filemtime(get_stylesheet_directory() . '/js/scripts.js'), 
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles_scripts');