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
				<h2><?php the_title(); ?></h2>
			</div>
			<hr>
			<div class="col-4 imgProduto">			
				<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"/>	
			</div>
			<div class="col-4 textoProduto">
				<?php the_content(); ?>
			</div>
			<div class="col-4 formularioSinglePage">
				<!-- <form method="post" action="http://franchin.com.br/cgi-sys/formmail.pl"/>  -->
				<form>

				<!-- <input type="hidden" name="recipient" value="contato@franchin.com.br"/>
				<input type="hidden" name="subject" value="Formulário FormMail"/><input type="hidden" name="redirect" value="http://192.185.217.158/~davicallegari/contato"/> -->

				<h2>Faça seu Orçamento</h2>

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

				<button type="submit" name="Submit" class="btn btn-success btn-md">Enviar</button>

			</form>
		</div>

		<div class="col-8 detalhesInfoTec">

			<!-- Nav tabs -->
			<ul class="nav nav-tabs d-flex justify-content-start" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#detalhes" role="tab">Detalhes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#info-tecnicas" role="tab">Informações Técnicas</a>
				</li>
					
				<?php
				$linkFolder = rwmb_meta('link-folder-comercial');

				if($linkFolder){
					echo '
					<li class="nav-item ml-auto">
						<a class="nav-link" target="_blank" href="'?><?php echo $linkFolder ?><?php echo '">
							<i class="fa fa-cloud-download" aria-hidden="true"></i> Download do folder comercial
						</a>
					</li>';
				}
				?>

				
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

	<!-- PRODUTOS RELACIONADOS -->
	<div class="row produtosRelacionados">
		<?php show_related_posts_by_tag(); ?>
		
		<div class="col-12 produtosRelacionadosTitle">
			<hr>	
			<h3>Veja também</h3>
		</div>
		<div class="col-12">
			<div class="row"> 
				<div class="card-deck d-flex justify-content-between">
					<?php 
					$posts_slides = new WP_Query(array(
						'post_type' => 'post',
							//'category_name' => 'Cabos Industriais',
						'posts_per_page' => 6
						));				
					while ($posts_slides->have_posts()) : $posts_slides->the_post();
					?>					
					<div class="col-lg-2">
						<a href="<?php the_permalink(); ?>">
							<div class="card">
								<img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Cabos Industriais">						
								<div class="card-block">
									<h4 class="card-title"><?php the_title(); ?></h4>
									<p class="card-text"><?php echo rwmb_meta('subtitulo'); ?></p>
								</div>
								<div class="card-footer">
									<small class="text-muted"><?php echo rwmb_meta('resumo'); ?></small>
								</div>
							</div>
						</a>
					</div>
				<?php endwhile; wp_reset_postdata();?>
				</div>	
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
