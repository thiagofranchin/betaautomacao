<div class="container">
	<div class="row">
		<nav class="navbar navbar-toggleable-md bg-inverse menuPrincipal col-12">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="col-4 hidden-lg-up">	
				<a class="navbar-brand" href="<?php bloginfo('home'); ?>">						
					<img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="Logo" height="45" class="img-fluid logoNavbar">		
				</a>
			</div>
			<?php
			wp_nav_menu( array(
				'menu'              => 'primary',
				'theme_location'    => 'primary',
				'depth'             => 3,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'navbarSupportedContent',
				'menu_class'        => 'navbar-nav mr-auto',
				'li_class'			=> 'nav-item',
				'a_class'			=> 'nav-link',
				'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				'walker'            => new wp_bootstrap_navwalker())
			);
			?>

			<?php
			//get_search_form();
			?>
		</nav>
	</div>
</div>