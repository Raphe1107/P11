<?php get_header() ?>

<?php get_template_part('templates_part/hero'); ?>

<?php get_template_part('templates_part/photo-filter'); ?>

<section class="indexphoto container">
  <?php $args = array(
     'post_type' => 'photos',
     'posts_per_page' => 8,
     'post__not_in' => array (get_the_ID()),
      'paged'=>1);
     $query = new WP_Query( $args );
    ?>
  <?php if($query->have_posts()) : ?>
        <?php while($query->have_posts()) : ?>
            <?php $query->the_post();?>       
            <div class="overlay-image">
                    <?php the_content(); ?>
                    <div class=hover>
                         <img class="full_screen" data-image="<?php echo get_the_post_thumbnail_url(); ?>" src="<?php echo get_template_directory_uri(); ?>./assets/fullscreen.png" alt="full_screen">
                         <a href="<?php echo get_the_permalink(get_the_ID());?>">
                             <img class="eye" src="<?php echo get_template_directory_uri(); ?>./assets/eye.png" alt="eye">
                         </a>
                         <div class="texte">
                                <div><?php the_title(); ?></div>
                                <div class="right_now"><?php echo strip_tags(get_the_term_list($post->ID, 'categorie'));?></div>
                         </div>
                    </div>
           </div>
       <?php endwhile; ?>
    <?php endif; 
    wp_reset_postdata();?>
</section>

<div class="btn__wrapper">
    <input type="button" Value="Charger plus" class="btn btn__primary" id="load-more">
</div>

















<?php get_footer() ?>
