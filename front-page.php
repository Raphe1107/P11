<?php get_header() ?>

<?php get_template_part('templates_part/hero'); ?> <!-- Ajout du template hero --> 

<?php get_template_part('templates_part/photo-filter'); ?> <!-- Ajout du template contenant les filtres --> 

<section class="indexphoto">
   
  <?php $args = array(
    'post_type' => 'photos',
    'posts_per_page' => 8,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged'=>1,
    );
    
    $query = new WP_Query( $args );
    
    
    if ($query->have_posts()):
        
        while ($query->have_posts()):
            $query->the_post(); ?>
            
            <?php get_template_part('templates_part/photo-block'); ?> <!-- Ajout du template des images --> 

            <?php
        endwhile; ?>
<?php get_template_part('templates_part/modale'); ?>

    <?php else: ?>
        <p>Désolé, aucun article ne correspond à cette requête</p>
    <?php endif;
    wp_reset_query();
    ?>
</section>

<!-- Bouton charger plus -->
<div class="button_loadmore">
    <a href="#!" class="loadmore_style" id="load-more-button">Charger plus</a>
</div>

<?php get_footer() ?>