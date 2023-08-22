<?php get_header() ?>

<section class="hero">
    <?php
        $args = array(
            'post_type' => 'photos', // Nom de votre custom post type
            'posts_per_page' => -1, // Afficher tous les articles de ce type
            'orderby' => 'rand',
        );

        $custom_query = new WP_Query($args);

        while ( $custom_query->have_posts() ) : $custom_query->the_post(); the_post_thumbnail();
        endwhile;

        wp_reset_postdata();
    ?>
    <h1 >PHOTOGRAPHE EVENT</h1>
</section>

<section class="post-filters">
   
</section>















<?php get_footer() ?>
