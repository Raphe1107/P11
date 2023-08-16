<?php get_header() ?>


<h1 class="entry-title">
    <?php the_title(); ?>
</h1>
<p>RÉFÉRENCE :
    <?php echo get_post_meta(get_the_ID(), 'reference', true); ?>
</p>
<p>CATÉGORIE :
    <?php echo the_terms(get_the_ID(), 'categorie', false); ?>
</p>
<p>TYPE :
    <?php echo get_post_meta(get_the_ID(), 'type', true); ?>
</p>
<p>FORMAT :
    <?php echo the_terms(get_the_ID(), 'format', false); ?>
</p>
<p>ANNÉE:
    <?php $post_date = get_the_date('Y');
    echo $post_date; ?>
</p>
