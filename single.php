<?php get_header(); ?>

<div class="container siglePage">
	<div class="row content">
		<nav class="breadcrumb col-12" typeof="BreadcrumbList" vocab="https://schema.org/">
    	<?php if(function_exists('bcn_display'))
    	{
        	bcn_display();
    	}?>
		</nav>
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<div class="col-12 titulo">
				<h1><?php the_title(); ?></h1>
			</div>
			<hr>
			<!-- IMAGEM EM DESTAQUE -->
			<div class="col-3 imgProduto">
				<div id="gallery-1" class="gallery galleryid-106 gallery-columns-3 gallery-size-thumbnail imgDestaque">
					<dl class="">
						<dt class="gallery-icon landscape">		
							<a href="<?php the_post_thumbnail_url(); ?>" class="alignnone size-medium wp-image-9" >
								<img class="img-fluid attachment-thumbnail size-thumbnail d-block mx-auto" src="<?php the_post_thumbnail_url(); ?>"/>
							</a>
						</dt>				
					</dl>
				</div>

				<!-- GALERIA DE IMAGENS -->
				<div class="row">
					<div class="col-4">
						<div id="gallery-1" class="gallery galleryid-106 gallery-columns-3 gallery-size-thumbnail img-thumb">
							<dl class="gallery-item">
								<dt class="gallery-icon landscape">		
									<a href="<?php echo rwmb_meta('foto1'); ?>" class="alignnone size-medium wp-image-9" >
										<img class="img-fluid attachment-thumbnail size-thumbnail img-thumb-gallery d-block mx-auto" src="<?php echo rwmb_meta('foto1'); ?>"/>
									</a>
								</dt>				
							</dl>
						</div>
					</div>
					<div class="col-4">
						<div id="gallery-1" class="gallery galleryid-106 gallery-columns-3 gallery-size-thumbnail img-thumb">
							<dl class="gallery-item">
								<dt class="gallery-icon landscape">		
									<a href="<?php echo rwmb_meta('foto2'); ?>" class="alignnone size-medium wp-image-9" >
										<img class="img-fluid attachment-thumbnail size-thumbnail img-thumb-gallery d-block mx-auto" src="<?php echo rwmb_meta('foto2'); ?>"/>
									</a>
								</dt>				
							</dl>
						</div>
					</div>
					<div class="col-4">
						<div id="gallery-1" class="gallery galleryid-106 gallery-columns-3 gallery-size-thumbnail img-thumb">
							<dl class="gallery-item">
								<dt class="gallery-icon landscape">		
									<a href="<?php echo rwmb_meta('foto3'); ?>" class="alignnone size-medium wp-image-9" >
										<img class="img-fluid attachment-thumbnail size-thumbnail img-thumb-gallery d-block mx-auto" src="<?php echo rwmb_meta('foto3'); ?>"/>
									</a>
								</dt>				
							</dl>
						</div>
					</div>
				</div>
			</div>
			<div class="col-5 textoProduto">
				<?php the_content(); ?>
			</div>
			<div class="col-4 formularioSinglePage">
				<!-- <form method="post" action="http://franchin.com.br/cgi-sys/formmail.pl"/>  -->
				<form>

				<!-- <input type="hidden" name="recipient" value="contato@franchin.com.br"/>
				<input type="hidden" name="subject" value="Formulário FormMail"/><input type="hidden" name="redirect" value="http://192.185.217.158/~davicallegari/contato"/> -->

				<h3>Faça um orçamento, estamos dispostos a negociar</h3>
						<br>
					
				
					<div class="form-contato">
									<div role="form" class="wpcf7" id="wpcf7-f116-o1" lang="pt-BR" dir="ltr">
												<div class="screen-reader-response"></div>
												<form action="/contato/#wpcf7-f116-o1" method="post" class="wpcf7-form" novalidate="novalidate">
												<div style="display: none;">
												<input type="hidden" name="_wpcf7" value="116">
												<input type="hidden" name="_wpcf7_version" value="4.8">
												<input type="hidden" name="_wpcf7_locale" value="pt_BR">
												<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f116-o1">
												<input type="hidden" name="_wpcf7_container_post" value="0">
												<input type="hidden" name="_wpcf7_nonce" value="ee1cb5078a">
													</div>


										<p>    <label>Nome</label><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Seu nome"></span> </p>
													
										<p>    <label>E-mail</label><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="seunome@email.com.br"></span> </p>
													
													<p>    <label>Produto</label><span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="<?php the_title(); ?>" size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Produto"></span> </p>
													
										<p>    <label>Mensagem</label><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Digite sua mensagem"></textarea></span> </p>
													
										<p><input type="submit" style="cursor: pointer !important;" value="Solicitar orçamento" class="wpcf7-form-control wpcf7-submit btn btn-success btn-lg btn-block">
										<span class="ajax-loader" src="http://www.betaautomacao.com.br/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Enviando ..." style="visibility: hidden;"></span></p>
													
										<div class="clearfix"></div><div class="wpcf7-response-output wpcf7-display-none"></div></form>
										
										
									
										
										
						</div>        
					</div>
		</div>

		<div class="col-8 detalhesInfoTec">

			<?php 
			$detalhes = rwmb_meta('detalhes');
			$infoTecnicas = rwmb_meta('info-tecnicas');
			$linkFolder = rwmb_meta('link-folder-comercial');

			if($detalhes || $infoTecnicas || $linkFolder){
				echo '<ul class="nav nav-tabs d-flex justify-content-start" role="tablist">';
			
			
				if($detalhes){
					echo '
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#detalhes" role="tab">Detalhes</a>
					</li>';
				}
				if(!$detalhes && $infoTecnicas){
					echo '
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#info-tecnicas" role="tab">Informações Técnicas</a>
					</li>';
				}elseif($infoTecnicas) {
					echo '
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#info-tecnicas" role="tab">Informações Técnicas</a>
					</li>';
				}
			
				if($linkFolder){
					echo '
					<li class="nav-item ml-auto">
						<a class="nav-link" target="_blank" href="'?><?php echo $linkFolder ?><?php echo '">
							<i class="fa fa-cloud-download" aria-hidden="true"></i> Download do folder comercial
						</a>
					</li>';
				}				
				echo '</ul>';
			}
			?>
			
			<?php 
			if($detalhes && $infoTecnicas){
				echo '
				<div class="tab-content">
					<div class="tab-pane active" id="detalhes" role="tabpanel">
						<pre>'?><?php echo rwmb_meta('detalhes'); ?><?php echo '</pre>
					</div>
					<div class="tab-pane" id="info-tecnicas" role="tabpanel">
						<pre>'?><?php echo rwmb_meta('info-tecnicas'); ?><?php echo '</pre>
					</div>
				</div>
				';
			}elseif($detalhes && !$infoTecnicas){
				echo '
				<div class="tab-content">
					<div class="tab-pane active" id="detalhes" role="tabpanel">
						<pre>'?><?php echo rwmb_meta('detalhes'); ?><?php echo '</pre>
					</div>
				</div>
				';
			}elseif(!$detalhes && $infoTecnicas){
				echo '
				<div class="tab-content">
					<div class="tab-pane active" id="info-tecnicas" role="tabpanel">
						<pre>'?><?php echo rwmb_meta('info-tecnicas'); ?><?php echo '</pre>
					</div>
				</div>
				';
			}
			?>
			
		</div>
	<?php endwhile; else: ?>
	<?php endif; ?>
	</div>

	<!-- PRODUTOS RELACIONADOS -->
	<div class="row produtosRelacionados">
		<!-- LISTA POSTS POR TAGS -->
		<?php show_related_posts_by_tag(); ?>
		
		<div class="col-12 produtosRelacionadosTitle">
			<hr>	
			<h3>O que você procura?</h3>
		</div>
		<div class="col-12 col-12 d-flex justify-content-center flex-wrap">
			
				<?php
				//echo get_the_tag_list('<span class="badge badge-primary">Tags: ',', ','</span>');
				$args=array(
				'orderby' => 'name',
				'order' => 'ASC'
				);
				$categories=get_categories($args);
				foreach($categories as $category) {
				echo '<span class="badge badge-primary">
					<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Ver postagens em %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> ';
				// echo '<br />'. $category->description . ' ';
				echo '('. $category->count . ')</span>';  }
				?>
						
		</div>
	</div>
</div>

	
	
	
	
	
<?php get_footer(); ?>
