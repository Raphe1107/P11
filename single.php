<?php get_header(); ?>


<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('templates_part/photo-detail'); ?>



		<?php endwhile;
endif; ?>

<section class="interesse">

<div class="textbutton">
	<p> Cette photo vous interesse ?</p>
	<button class="loadmore_style buttoncontact">Contact</button>
</div>



</section>

<?php get_footer(); ?>