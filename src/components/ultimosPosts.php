<div class="ultimosPosts">
	<div class="col-sm-12">
		<h3>Últimos posts</h3>

		<div class="row">			
			
			<?php 
			$posts_slides = new WP_Query(array(
				'post_type' => 'post',
				//'category_name' => 'slide',
				'posts_per_page' => 4
				));				
			while ($posts_slides->have_posts()) : $posts_slides->the_post();
			?>

			<div class="col-sm-3">
				<h5><?php the_title(); ?></h5>			
				<a href="<?php the_permalink(); ?>">
					<?php //the_post_thumbnail('thumbnail-listpost', array('class' => 'img-fluid thumbnail-listpost')); ?>
					<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"/>
				</a>
				<p><?php echo rwmb_meta('subtitulo'); ?></p>
			</div>

		<?php endwhile; wp_reset_postdata();?>

		</div>			
	</div>
</div>