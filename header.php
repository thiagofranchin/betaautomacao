<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php wp_title( '|' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-lg-1 hidden-sm-down headerBoxLogo">
					<a href="<?php bloginfo('home'); ?>">					
						<img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="Logo" class="logoTop">
					</a>
				</div>
				<div class="col-md-6 col-lg-7 text-center text-md-left headerBoxLeft">
					<?php 
						if ( is_active_sidebar('sidebar-header-left') ) {
							dynamic_sidebar('sidebar-header-left');
						}
					?>
				</div>
				<div class="col-md-4 text-center headerBoxRight">
					<?php 
						if ( is_active_sidebar('sidebar-header-right') ) {
							dynamic_sidebar('sidebar-header-right');
						}
					?>
				</div>
			</div>
		</div>
	</header>


	<div class="row bg-gray menuPrincipalContent">
		<?php include "src/components/menuPrincipal.php"; ?>
	</div>


	