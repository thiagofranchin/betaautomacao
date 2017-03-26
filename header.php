<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/node_modules/animate.css/animate.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body>
	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-lg-1 hidden-sm-down">
					<a href="<?php bloginfo('home'); ?>">					
						<img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="Logo" class="logoTop">
					</a>
				</div>
				<div class="col-md-6 col-lg-7 text-center text-md-left">
					<?php 
						if ( is_active_sidebar('sidebar-header-left') ) {
							dynamic_sidebar('sidebar-header-left');
						}
					?>
				</div>
				<div class="col-md-4 text-center">
					<?php 
						if ( is_active_sidebar('sidebar-header-right') ) {
							dynamic_sidebar('sidebar-header-right');
						}
					?>
				</div>
			</div>
		</div>
	</header>


	<div class="container">
		<nav class="navbar navbar-toggleable-md bg-inverse menuPrincipal">
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


	