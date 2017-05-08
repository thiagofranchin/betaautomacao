<div class="col-12 slideHome">
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
				<a href="<?php the_title(); ?>">
					<img class="img-fluid d-block mx-auto" src="<?php the_post_thumbnail_url(); ?>"/>
				</a>
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