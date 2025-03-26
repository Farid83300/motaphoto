<?php
/**
 * Enqueue styles and scripts
 */

 function charger_styles_theme() {
    wp_enqueue_style('style-theme', get_stylesheet_uri() . 'style.css', array(), '1.0');
    wp_enqueue_style('theme-principal', get_template_directory_uri() . '/css/theme.css', array(), '1.0');
    wp_enqueue_style('style-modale', get_template_directory_uri() . '/css/modale.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'charger_styles_theme');

    
// Enregistrement et chargement du fichier JavaScript
function theme_enqueue__scripts() {
    wp_enqueue_script(
        'main-script', 
        get_stylesheet_directory_uri() . '/js/scripts.js', 
        array('jquery'), 
        filemtime(get_stylesheet_directory() . '/js/scripts.js'), 
        true
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles_scripts');


// Enregristrement des menus
function register_my_menu() {
    register_nav_menu( 'nav-menu-header', __( 'Menu Header', 'text-domain' ) );
    register_nav_menu( 'nav-menu-footer', __( 'Menu Footer', 'text-domain' ) );
}
add_action( 'after_setup_theme', 'register_my_menu' );