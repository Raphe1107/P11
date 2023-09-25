<div class="image-post">
    <article>
        <?php if (get_post_type() === 'photos') : ?>

            <!-- IMAGE -->
            <div class="overlay-image">
                <a class="img-block" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>

            <!-- SURVOL DE L'IMAGE -->
            <div class="image-contenu">
                <img class="fullscreen" src="<?php echo get_stylesheet_directory_uri(); ?> '/images/fullscreen.png' " alt="fullsreen">
                <a class="" href="<?php the_permalink(); ?>"><img class="eye"src="<?php echo get_stylesheet_directory_uri(); ?> '/images/eye.png' " alt="oeil"></a>
                <p class="hover-title"><?php the_title(); ?></p>
                <p class="hover-categorie"><?php echo the_terms(get_the_ID(), 'categorie', false);?></p>
            </div>

        <?php endif; ?>
    </article>
</div>