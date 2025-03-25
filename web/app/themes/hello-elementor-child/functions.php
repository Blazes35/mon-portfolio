<?php
require_once get_stylesheet_directory() . '/cpt-portfolio.php';

add_theme_support('post-thumbnails');
function bootstrap() {
    // Inclure le CSS de Bootstrap
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css', array(), '5.3.0');
    // Inclure le JS de Bootstrap (nécessaire pour certains composants comme les modals)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true);
}
add_action('wp_enqueue_scripts', 'bootstrap');
