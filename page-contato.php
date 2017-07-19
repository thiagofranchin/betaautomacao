<?php get_header(); ?>

<style>

	.contactPage {	
		background-color: white;}
		
		
		h1 {     
			margin-bottom: 30px;		
			margin-top: 30px;	
			font-size: 2.3rem;
			font-weight: 400;
		
	}
	
	h3{
		    font-size: 1.75rem;
	}
	
			.titulo {
			padding: 10px 0 20px 30px;
			color: $gray;	
			border-bottom: solid 1px #ddd;
			
		}
	
	
	.contact{
			background: #f5f5f5;
			padding: 0;
	
	}
	
	.contact-types{
	
	    padding: 60px;
			font-size: 20px;
			font-weight: 400;
			text-align: center;
		
	}
	
	.contactPage .fa{
		
			font-size: 90px;
			color: #0463cc;
			margin-bottom: 40px;
	
	}
	
	
	.form-contato{
			margin-right: auto;
			margin-left: auto;
	
	
	}
	
	input{
	height: 50px;
	
	}
	


</style>
	


<div class="container content contactPage">
	
	<div class="row content">
	<div class="col-12 titulo">
    <h1>
			Obrigado por escolher a Beta!
				</h1>
			</div>
		
    <div class="row" style="width:100%">
       
			<div class="col-lg-4 contact-types"><p><i class="fa fa-volume-control-phone" aria-hidden="true"></i><br>11 9.9512-8912 / 11 9.5859-5416<br> Segunda – Sexta das 8h às 18h</p> </div>
			<div class="col-lg-4 contact-types"><p><i class="fa fa-envelope-o" aria-hidden="true"></i><br>contato@betaautomacao. com.br</p> </div>
			<div class="col-lg-4 contact-types"><p><i class="fa fa-map-signs" aria-hidden="true"></i><br> R. Estado do Rio de Janeiro, 326 <br> Terras de S.Pedro e S.Paulo <br> CEP 13324-454 Salto/SP</p> </div>
     
       
    </div>
		
    <div class="col-12 contact py-4">
			
			 <h3 class="text-center py-4">Preencha o formulário e nos envie sua solicitação, que em breve, entraremos em contato.</h3>
        <div class="form-contato col-lg-4">
            <?php echo do_shortcode('[contact-form-7 id="116" title="Formulário Contato"]')?>
        </div>
			
    </div>
		
</div>
</div>
<?php get_footer(); ?>
