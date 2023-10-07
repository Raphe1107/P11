<div class="hero">
    <div class="hero-photo">
        <!-- Image aléatoire -->
        <?php   
            $args = array( 
            'post_type' => 'photos',
            'orderby'   => 'rand',
            'posts_per_page' => 1,
            );
            
            $query_hero = new WP_Query( $args );            
        ?>
        
        <?php while($query_hero->have_posts()) : ?>
            <?php $query_hero->the_post();?> 

            <?php if(has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_post_thumbnail('hero'); ?></a>
            <?php endif; ?>                  
                    
        <?php endwhile; ?>

        <!-- Titre de l'image -->
        <h1 class="hero-title"><?php the_title(); ?></h1>
    </div>  
</div>
<?php
    
    wp_reset_postdata();       
?>