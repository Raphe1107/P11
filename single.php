<?php get_header(); ?>


<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('templates_part/photo-detail'); ?>


			<section class="interesse">
				<div class="textbutton">
					<p> Cette photo vous interesse ?</p>
					<a id="Buttoncontact" class="loadmore_style buttoncontact">Contact</a>	
				</div>
				<?php get_template_part('templates_part/nextprevarrow'); ?>
			</section>

			<section class="vousaimerezaussi">
				<?php get_template_part('templates_part/photo-suggestion'); ?>
			</section>
		<?php endwhile; ?>
	<?php	endif; ?>


<?php get_footer(); ?>