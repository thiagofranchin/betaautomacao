<?php get_header(); ?>

<div class="container">
	<div class="row">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		
		<div class="col-8">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>

		<?php endwhile; else: ?>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>