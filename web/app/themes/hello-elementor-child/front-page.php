<?php
get_header();
?>

<!-- Conteneur principal -->
<div class="container my-5">
    <!-- Section Bienvenue -->
    <section class="text-center mb-5">
        <h1 class="display-4">Bienvenue sur mon portfolio</h1>
        <p class="lead">Je suis Loris, étudiant en BUT informatique. Voici mes compétences :</p>
        <ul class="list-unstyled">
            <li>HTML, CSS, JS, PHP</li>
            <li>Node.JS, Java, Python</li>
            <li>SQL, MySQL, PostgreSQL, MongoDB</li>
        </ul>
    </section>

    <!-- Section Mes meilleures réalisations -->
    <section>
        <h2 class="text-center mb-4">Mes meilleures réalisations</h2>
        <?php
        $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 3,
            'meta_query' => array(
                array(
                    'key' => 'meilleure_realisation',
                    'value' => '1',
                ),
            ),
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
        wp_reset_postdata();
        ?>
    </section>
</div>

<?php
get_footer();
?>