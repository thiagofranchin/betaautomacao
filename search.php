<?php get_header(); ?>

<div class="container">
	<h2>Resultado para <?php echo get_search_query();?></h2>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="row">
		<div class="col-3">
			<a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"/></a>
		</div>
		<div class="col-5">			
			<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
			<h5><?php echo rwmb_meta('subtitulo'); ?></h5>
			<p><?php echo rwmb_meta('resumo'); ?></p>
		</div>
		<div class="col-4"></div>	

	</div>
	<?php endwhile; else: ?>	
	<p>Não foi encontrado porra nenhuma.</p>
	<?php endif; ?>
	<?php wordpress_pagination(); ?>
</div>

<?php get_footer(); ?>