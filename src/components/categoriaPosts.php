<div class="categoriaPosts">

	<div class="container">
		<!-- CABOS INDUSTRIAIS -->
		<div class="row">
			<div class="col-12">	
				<h3>Cabos</h3>
			</div>
			<div class="card-deck">
				<?php 
				$posts_slides = new WP_Query(array(
					//'post_type' => 'post',
					'category_name' => 'Cabos Industriais',
					'posts_per_page' => 3
					));				
				while ($posts_slides->have_posts()) : $posts_slides->the_post();
				?>					
				<div class="col-md">
					<a href="<?php the_permalink(); ?>">
						<div class="card">
							<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Cabos Industriais">						
							<div class="card-block">
								<h4 class="card-title"><?php the_title(); ?></h4>
								<p class="card-text"><?php echo rwmb_meta('subtitulo'); ?></p>
							</div>
							<div class="card-footer">
								<small class="text-muted"><?php echo rwmb_meta('resumo'); ?></small>
							</div>
						</div>
					</a>
				</div>
				<?php endwhile; wp_reset_postdata();?>
			</div>
			<button type="button" text-align="center" class="btn btn-outline-primary">Todos os Cabos</button>
		</div><!-- /.row-->
		
		<hr>

		<!-- SENSORES -->
		<div class="row">
			<div class="col-12">	
				<h3>Sensores</h3>
			</div>
			<div class="card-deck">
				<?php 
				$posts_slides = new WP_Query(array(
					//'post_type' => 'post',
					'category_name' => 'Sensores',
					'posts_per_page' => 3
					));				
				while ($posts_slides->have_posts()) : $posts_slides->the_post();
				?>					
				<div class="col-md">
					<a href="<?php the_permalink(); ?>">
						<div class="card">
							<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Cabos Industriais" />						
							<div class="card-block">
								<h4 class="card-title"><?php the_title(); ?></h4>
								<p class="card-text"><?php echo rwmb_meta('subtitulo'); ?></p>
							</div>
							<div class="card-footer">
								<small class="text-muted"><?php echo rwmb_meta('resumo'); ?></small>
							</div>
						</div>
					</a>
				</div>
				<?php endwhile; wp_reset_postdata();?>
			</div>
			<button type="button" text-align="center" class="btn btn-outline-primary">Todos os Sensores</button>
		</div><!-- /.row-->
	</div><!-- /.container-->
		<hr>
</div><!-- /.categoriaPosts-->