<div class="container">
	<div class="row">
		<nav class="navbar navbar-toggleable-md bg-inverse menuPrincipal col-12">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"  data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="col-4 hidden-lg-up">	
				<a class="navbar-brand" href="<?php bloginfo('home'); ?>">						
					<img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="Logo" height="45" class="img-fluid logoNavbar">		
				</a>
			</div>
			<?php
			// wp_nav_menu( array(
			// 	'menu'              => 'primary',
			// 	'theme_location'    => 'primary',
			// 	'depth'             => 4,
			// 	'container'         => 'div',
			// 	'container_class'   => 'collapse navbar-collapse',
			// 	'container_id'      => 'navbarText',
			// 	'menu_class'        => 'navbar-nav mr-auto',
			// 	'li_class'			=> 'nav-item',
			// 	'a_class'			=> 'nav-link',
			// 	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			// 	'walker'            => new wp_bootstrap_navwalker())
			//);
			?>

			<?php $pages = get_pages(array('sort_column' =>'menu_order')); ?>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto" id="navbarText">

					<a href="<?php echo(bloginfo("url")); ?>"><i class="halflings white home"><li class="nav-item"></i> Home</li></a>
				
					<a href="#"><li class="nav-item">Produtos
						<ul class="subMenu"><?php wp_list_categories( array("title_li"=>"","child_of"=>23) ); ?></ul>
					</li></a>
						
					
					
					<a href="#"><li class="nav-item">Marcas	
					<ul class="subMenu"><?php wp_list_categories( array("title_li"=>"","child_of"=>28)); ?></ul>						
					</li>	</a>	
						
					
					<!--<li class="nav-item"><a href="#">TESTE</a>
						<ul class="subMenu"><?php wp_list_categories( array( 'title_li' => '', 'current_category' => 'All' ) ); ?></ul>								
					</li>-->

					<?php foreach($pages as $page){ ?>

						<a href="<?php echo(get_permalink($page->ID)); ?>"><li class="nav-item"><?php echo($page->post_title); ?></li></a>

					<?php } ?>
					<li class="searchProduct">
						<?php //get_search_form() ?>
					</li>
				</ul>
			</div>
			<?php
			//get_search_form();
			?>
		</nav>




	</div>
</div>

	
	
	
	
	