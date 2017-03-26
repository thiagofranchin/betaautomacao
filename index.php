<?php get_header(); ?>


<hr>

<div class="container">
	<div class="row">
		<div class="col-12 col-xl-8 push-xl-2">
			<div id="carouselExampleIndicators" class="carousel slide mx-auto d-block" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">

					<?php 
					$posts_slides = new WP_Query(array(
						// 'post_type' => 'post',
						'category_name' => 'slide',
						'posts_per_page' => 3
						));
					$i = 1;
					while ($posts_slides->have_posts()) : $posts_slides->the_post();
					?>

					<div class="carousel-item <?php if($i == 1) echo 'active'; ?>">						
						<a href="<?php the_permalink(); ?>">
							<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"/>								
						</a>
						<div class="carousel-caption d-none d-md-block">
							<h3><?php the_title(); ?></h3>
							<a href="<?php the_permalink(); ?>" type="button" class="btn btn-md btn-success"><?php echo rwmb_meta('subtitulo'); ?></a>
							<p><?php echo rwmb_meta('resumo'); ?></p>						
						</div>						
					</div>
					<?php $i++; endwhile; wp_reset_postdata();?>


				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>		
	</div>


	<div class="row">
		<div class="col-sm-9">
			<h3>Últimos posts</h3>

			<div class="row ultimosPosts">			
				
				<?php 
				$posts_slides = new WP_Query(array(
					'post_type' => 'post',
					//'category_name' => 'slide',
					'posts_per_page' => 3
					));				
				while ($posts_slides->have_posts()) : $posts_slides->the_post();
				?>

				<div class="col-sm-4">
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
		<div class="col-sm-3 ultimosPosts sqn">
				<h3>Posts Categoria X</h3>

				<?php 
				$posts_slides = new WP_Query(array(
							// 'post_type' => 'post',
					'category_name' => 'Css',
					'posts_per_page' => 1
					));				
				while ($posts_slides->have_posts()) : $posts_slides->the_post();
				?>

				<div class="col-sm-3">
					<h5><?php the_title(); ?></h5>				
					<a href="<?php the_permalink(); ?>">
						<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"/>
						<?php //the_post_thumbnail('thumbnail-listpost', array('class' => 'img-fluid thumbnail-listpost')); ?>
					</a>
					<p><?php echo rwmb_meta('subtitulo'); ?></p>
				</div>

				<?php endwhile; wp_reset_postdata();?>
			</div>
	</div>


	<div class="row">
		<div class="col-4">
			<!-- <h3>Vídeos</h3> -->

			<?php 
			$posts_slides = new WP_Query(array(
					// 'post_type' => 'post',
				'category_name' => 'videos',
				'posts_per_page' => 1
				));
			while ($posts_slides->have_posts()) : $posts_slides->the_post();
			?>
			<h5><?php the_title(); ?></h5>
			<div class="embed-responsive embed-responsive-16by9">
				<?php 
				echo rwmb_meta('oembed','type=oembed');
				?>
			</div>
			<button type="button" class="btn btn-md btn-primary"><?php echo rwmb_meta('subtitulo'); ?></button>
			<p><?php echo rwmb_meta('resumo'); ?></p>
		<?php endwhile; wp_reset_postdata();?>

		</div>
		<div class="col-4">
			<!-- <h3>Galeria do Instagram</h3> -->
			<?php 
			if ( is_active_sidebar('sidebar-instagram') ) {
				dynamic_sidebar('sidebar-instagram');
			}
			?>
		</div>
	</div>




</div>



<?php get_footer(); ?>