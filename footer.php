<footer>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-4">
				<a href="<?php bloginfo('home'); ?>">					
					<img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="Logo" class="logoFooter">
				</a>
				<?php 
				if ( is_active_sidebar('sidebar-footer-left') ) {
					dynamic_sidebar('sidebar-footer-left');
				}
				?>
			</div>
			<div class="col-12 col-sm-4">
				<div class="categoriasFooter">
						<h3>Produtos</h3>
					<?php 
					//if ( is_active_sidebar('sidebar-footer-middle') ) {
					//	dynamic_sidebar('sidebar-footer-middle');
					//}

					?>
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
			</div>
			<div class="col-12 col-sm-4">
				<?php 
				if ( is_active_sidebar('sidebar-footer-right') ) {
					dynamic_sidebar('sidebar-footer-right');
				}
				?>
			</div>
		</div>
	</div>
	<div class="container-fluid copyright">		
		<?php 
		if ( is_active_sidebar('sidebar-footer-copyright') ) {
			dynamic_sidebar('sidebar-footer-copyright');
		}
		?>		
	</div>
</footer>
	<!-- <script src="https://use.fontawesome.com/dc795d5f11.js"></script> -->

<?php wp_footer(); ?>
</body>
</html>