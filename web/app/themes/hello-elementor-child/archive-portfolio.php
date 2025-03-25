<?php
get_header();
$args = array(
    'post_type' => 'portfolio',
);
$query = new WP_Query($args);
if ($query->have_posts()) :
    echo '<div class="row portfolio-grid">';
    while ($query->have_posts()) : $query->the_post();
        echo '<div class="col-md-4 mb-4">';
        echo '<div class="card h-100">';
        if (has_post_thumbnail()) {
            echo '<img src="' . get_the_post_thumbnail_url() . '" class="card-img-top" alt="' . get_the_title() . '">';
        }
        echo '<div class="card-body">';
        the_title('<h3 class="card-title">', '</h3>');

        $date = get_field('date_de_realisation');
        if ($date) {
            echo '<p class="card-text"><small class="text-muted">Date : ' . esc_html($date) . '</small></p>';
        }
        $lien = get_field('lien_du_projet');
        if ($lien) {
            echo '<a href="' . esc_url($lien) . '" class="btn btn-primary" target="_blank">Voir le projet</a>';
        }

        $image_url = get_field('image_frontpage');
        if ($image_url) {
            echo '<img src="' . esc_url($image_url['url']) . '" class="img-fluid mt-2" alt="Image">';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
    endwhile;
    echo '</div>';
else :
    echo '<p class="text-center">Aucune réalisation trouvée.</p>';
endif;
get_footer();
?>