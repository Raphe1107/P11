
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
        <div class="single-image">
            <?php the_post_thumbnail(); ?>
        </div>

        <div class="single-image-hover">
        <img class="fullscreen" src="<?php echo get_stylesheet_directory_uri(); ?> '/images/fullscreen.png' " alt="fullscreen">
        </div>
    </div>
</article>

