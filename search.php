<?php get_header(); ?>

<div class="container col-12">
	<h1 style="margin-bottom: 30px; font-size: 2.3rem; font-weight: 400; padding: 30px 0px 0px 30px; color: #424242; margin-bottom: 40px; ">
		Resultado para <?php echo get_search_query();?></h1>
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="row" style="margin: 20px; border: 1px solid #ccc; background: #fff;">
		<div class="col-3">
			<a href="<?php the_permalink(); ?>"><img class="img-fluid" style="margin-left: -14px;" src="<?php the_post_thumbnail_url(); ?>"/></a>
		</div>
		<div class="col-5" style="padding: 20px;">			
			<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
			<h5><?php echo rwmb_meta('subtitulo'); ?></h5>
			<p><?php echo rwmb_meta('resumo'); ?></p>
		</div>
		<div class="col-4"></div>	

	</div>
	<?php endwhile; else: ?>	
	<p>Não foi encontrado porra nenhuma.</p>
	<?php endif; ?>
	<div class="col-12" style="text-align:center; padding:40px; font-size: 22px; font-weight:400;"><?php wordpress_pagination(); ?></div>
</div>

<?php get_footer(); ?>

