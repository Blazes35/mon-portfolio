<?php
function register_portfolio_cpt() {
    $labels = array(
        'name' => 'Portfolio',
        'singular_name' => 'Portfolio',
        'menu_name' => 'Portfolio',
        'add_new' => 'Ajouter une réalisation',
        'add_new_item' => 'Ajouter une nouvelle réalisation',
        'edit_item' => 'Modifier la réalisation',
        'all_items' => 'Toutes les réalisations',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'portfolio'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category_portfolio'),
        'show_in_rest' => true,
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'register_portfolio_cpt');

function register_portfolio_taxonomy() {
    $labels = array(
        'name' => 'Catégories de portfolio',
        'singular_name' => 'Catégorie de portfolio',
        'menu_name' => 'Catégories',
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'category-portfolio'),
    );

    register_taxonomy('category_portfolio', array('portfolio'), $args);
}
add_action('init', 'register_portfolio_taxonomy');