<?php get_header(); ?>

<div class="container categoryPage">
	<div class="row content">
		<nav class="breadcrumb col-12" typeof="BreadcrumbList" vocab="https://schema.org/">
    	<?php if(function_exists('bcn_display'))
    	{
        	bcn_display();
    	}?>
		</nav>
		
			<div class="col-12 titulo">
				<h1>
					<?php 	
					$url= $_SERVER['REQUEST_URI'];					
					$url = explode('/', $url);		
					$parteurldesejada = $url[4];
					if($url[5]){
						if($url[5] == 'cabos-hibridos'){
							$url[5] = 'Cabos Híbridos';
						}elseif($url[5] == 'sensor-de-area'){
							$url[5] = 'Sensor de Área';
						}else{
							$url[5] = 'Sensor Fotoelétrico';
						}
						$parteurldesejada .= " / " . $url[5];
					}
					$parteurldesejada = str_replace('-',' ',$parteurldesejada);
					if($parteurldesejada == 'reles' || $parteurldesejada == 'inversores de frequencia' || $parteurldesejada == 'transmissores de pressao'){
						if($parteurldesejada == 'reles'){
							$parteurldesejada = 'Réles';
						}elseif($parteurldesejada == 'inversores de frequencia'){
							$parteurldesejada = 'Inversores de Frequência';
						}else{
							$parteurldesejada = 'Transmissores de Pressão';
						}
					}
					echo $parteurldesejada;
					?>
				</h1>
			</div>
		
		<div class="col-8">
			<div class="row">
			<div class="card-deck d-flex justify-content-between"></div>	
				
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>			
				<div class="col-4">
					<a href="<?php the_permalink(); ?>">
						<div class="card">
							<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">						
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
								
			<?php endwhile; else: ?>
			<?php endif; ?>
			<br/>
				<br/>
				<br/>
				</div>
		
		</div>


		<div class="col-4">
			<ul class="nav nav-tabs nav-justified" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#produtos" role="tab">Produtos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#marcas" role="tab">Marcas</a>
				</li>				
			</ul>

			<div class="tab-content">
				<div class="tab-pane active" id="produtos" role="tabpanel">
					<?php
					wp_nav_menu( array(
						'menu'              => 'secondary',
						'theme_location'    => 'secondary',
						'echo' 				=> true,
						'container'         => 'div',
						'container_id'   	=> '',
						'container_class'   => 'list-group',
						'before' 			=> '',
						'a_class'			=> 'list-group-item list-group-item-action',					
						'after' 			=> '',
						'depth'				=> 3,
						'walker'			=> '')
					);
					?>
				</div>
				<div class="tab-pane" id="marcas" role="tabpanel">
					MENU MARCAS
				</div>
			</div>			
	<br/>
<br/>
<br/>
		</div>	


	</div>
</div>



	<?php wordpress_pagination(); ?>



<?php get_footer(); ?>




