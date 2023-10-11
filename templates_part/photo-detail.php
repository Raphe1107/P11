
<article class="photodetails">
    <div class="refphoto">
        <h1 class="photo-title">
            <?php the_title(); ?> 
        </h1>
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
            <?php echo get_the_date('Y'); ?>
        </p>
    </div>

    <div class="post">
        <div class="single-image" data-image="<?php echo esc_attr(get_the_post_thumbnail_url(get_the_ID())); ?>">
            <?php the_post_thumbnail(); ?> 
        </div>

        <div class="single-image-hover">
            <img class="fullscreen" src="<?php echo get_stylesheet_directory_uri(); ?> '/images/fullscreen.png' " alt="fullscreen" 
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
                data-ref="<?php echo get_post_meta(get_the_ID(), 'reference', true); ?>">>
        </div>
    </div>
</article>
<?php get_template_part('templates_part/modale'); ?>