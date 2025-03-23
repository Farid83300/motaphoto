
<?php
function theme_enqueue_styles_scripts() {
    // Enqueue CSS
    wp_enqueue_style('main-style', get_template_directory_uri() . '/styles.css', array(), '1.0.0', 'all');
    
    // Enqueue JavaScript
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}

// Hook into WordPress
add_action('wp_enqueue_scripts', 'theme_enqueue_styles_scripts');
?>


