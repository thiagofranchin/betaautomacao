<?php get_header(); ?>

<div class="container siglePage">
	<div class="row">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<div class="col-12 titulo">
			<h2><?php the_title(); ?></h2>
		</div>

		<div class="col-4 imgProduto">			
			<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"/>	
		</div>
		<div class="col-4 textoProduto">
			<?php the_content(); ?>
		</div>
		<div class="col-4 formularioSinglePage">
			formulário
		</div>

		<div class="col-8 detalhesInfoTec">

			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#detalhes" role="tab">Detalhes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#info-tecnicas" role="tab">Informações Técnicas</a>
				</li>			 
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="detalhes" role="tabpanel">
					<pre><?php echo rwmb_meta('detalhes'); ?></pre>

				</div>
				<div class="tab-pane" id="info-tecnicas" role="tabpanel">
					<pre><?php echo rwmb_meta('info-tecnicas'); ?></pre>
				</div>
			</div>
		</div>
		<?php endwhile; else: ?>
		<?php endif; ?>
	</div>

	<hr>
	<!-- PRODUTOS RELACIONADOS -->
	<div class="col-12 produtosRelacionados">	
		<?php show_related_posts_by_tag(); ?>
	</div>
</div>

<?php get_footer(); ?>
