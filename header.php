<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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


	