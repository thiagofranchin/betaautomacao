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
						

				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" id="nome" name="nome" size="40" placeholder="Seu nome" class="form-control">
					<small id="errorNome" class="form-text text-muted"></small>
				</div>
				<div class="form-group">
					<label for="nome">E-mail:</label>
					<input type="email" name="email" size="40" placeholder="Seu e-mail" class="form-control">
					<small id="errorEmail" class="form-text text-muted"></small>
				</div>
				<div class="form-group">
					<label for="nome">Telefone:</label>
					<input type="tel" name="telefone" size="40" placeholder="(99) 9-9999-9999" class="form-control">
				</div>
				<div class="form-group">
					<label for="nome">Qual o produto:</label>
					<input type="text" name="produto" size="40" placeholder="Inversor de frequência..." class="form-control">
				</div>
				<div class="form-group">
					<label for="nome">Mensagem:</label>
					<textarea name="mensagem" placeholder="Digite aqui sua mensagem" class="form-control"></textarea>
				</div>

				<button type="submit" name="Submit" class="btn btn-success btn-lg btn-block">Solicitar orçamento</button>

			</form>
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
			<h3>Categorias em formato de nuvem de tag</h3>
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
