<div class="image-post">
    <article>
        <?php if (get_post_type() === 'photos') : ?>

            <!-- Image -->
            <div class="overlay-image">
                <a class="img-block" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?></a>
            </div>

            <!-- Survol de l'image -->
            <div class="image-contenu">
                <img class="fullscreen" src="<?php echo get_stylesheet_directory_uri(); ?> '/images/fullscreen.png' " alt="fullsreen" 
                data-image="<?php echo esc_attr(get_the_post_thumbnail_url(get_the_ID())); ?>" 
                <?php
                $terms = get_the_terms(get_the_ID(), 'categorie');
                $categories = array();

                if ($terms && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                        $categories[] = $term->name;
                    }
                }
                $category_list = implode(', ', $categories);
                ?>
                data-cate="<?php echo esc_attr($category_list); ?>"
                data-ref="<?php echo get_post_meta(get_the_ID(), 'reference', true); ?>">
                <a class="" href="<?php the_permalink(); ?>"><img class="eye"src="<?php echo get_stylesheet_directory_uri(); ?> '/images/eye.png' " alt="oeil"></a>
                <p class="hover-title"><?php the_title(); ?></p>
                <p class="hover-categorie"><?php echo the_terms(get_the_ID(), 'categorie', false);?></p>
            </div>

        <?php endif; ?>
    </article>
</div>