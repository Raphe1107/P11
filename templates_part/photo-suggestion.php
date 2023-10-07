<p>Vous aimerez aussi</p>
<div class="same-photo-cat">
    <?php 
        $cate = array_map(function ($terms) {
        return $terms->term_id;
        }, get_the_terms(get_post(), 'categorie'));
        $args = array(
            'post__not_in' => [get_the_ID()],
            'order_by_rand' => 'rand',
            'post_type' => 'photos',
            'posts_per_page' => 2,
            'tax_query' => [
            [
                'taxonomy' => 'categorie',
                'terms' => $cate,
            ]
            ]
        );
                    
        $new_query = new WP_Query( $args );

                    
        if( $new_query->have_posts() ) : while( $new_query->have_posts() ) : $new_query->the_post(); ?>

            <div class="double-img">
                            
                <div class="single-similaire" data-image="<?php echo esc_attr(get_the_post_thumbnail_url(get_the_ID())); ?>">
                    <a class="" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                            
                <div class="image-contenu">
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
                    <a class="" href="<?php the_permalink(); ?>"><img class="eye"src="<?php echo get_stylesheet_directory_uri(); ?> '/images/eye.png' " alt="oeil"></a></i>
                </div>
            </div>

            <?php endwhile;
        endif;
    wp_reset_postdata(); ?>
</div>
                
<div class="plusdephoto">
    <a href="<?php echo home_url( '' ); ?>"><button class="loadmore_style">Toutes les photos</button></a>
</div>
            
    