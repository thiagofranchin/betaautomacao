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
				<?php 
				if ( is_active_sidebar('sidebar-footer-middle') ) {
					dynamic_sidebar('sidebar-footer-middle');
				}
				?>				
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


	<!-- SCRIPT -->
	<script src="<?php bloginfo('template_url'); ?>/node_modules/jquery/dist/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/node_modules/tether/dist/js/tether.min.js"></script>
	<script src="https://use.fontawesome.com/dc795d5f11.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>
	<?php wp_footer(); ?>
</body>
</html>