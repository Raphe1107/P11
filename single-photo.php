<?php get_header() ?>
<?php
$args = array(
    'post_type' => 'photos', // Nom de votre custom post type
    'posts_per_page' => 1, // Afficher tous les articles de ce type
);
?>
<?php $custom_query = new WP_Query($args); ?>

<?php if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : 
    $custom_query->the_post(); ?>

<article class="photodetails">
    <h1 class="photo-title">
        <?php the_title(); ?>
    </h1>
    <div class="refphoto">
        <p>RÉFÉRENCE :
            <?php echo get_post_meta(get_the_ID(), 'reference', true); ?>
        </p>
        <p>CATÉGORIE :
            <?php  echo the_terms(get_the_ID(), 'categorie', false); ?>
        </p>
        <p>FORMAT :
            <?php echo the_terms(get_the_ID(), 'format', false); ?>
        </p>
        <p>TYPE :
            <?php echo get_post_meta(get_the_ID(), 'type', true); ?>
        </p>
        <p>ANNÉE:
            <?php $post_date = get_the_date('Y');
            echo $post_date; ?>
        </p>
    </div>

    
    <div class="photo">
        <?php the_content(); ?>
    </div>
    
</article>


<section class="interesse">
    <p></p>
    <button></button>
</section>

<section class ="aimerez">
    <button></button>
</section>
<?php endwhile;endif ?>
<?php get_footer() ?>