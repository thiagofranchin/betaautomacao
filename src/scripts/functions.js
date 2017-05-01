$(document).ready(function() {
	//MENU PRINCIPAL
		//CABOS MENU
		$('.menuPrincipalContent .menuPrincipal #navbarSupportedContent #menu-menu-principal #menu-item-43 ul #menu-item-17').mouseover(function() {
			$(this).addClass("show");
		}).mouseout(function() {
			$( this ).removeClass("show");
		});

		//SENSORES MENU
		$('.menuPrincipalContent .menuPrincipal #navbarSupportedContent #menu-menu-principal #menu-item-43 ul #menu-item-23').mouseover(function() {
			$(this).addClass("show");
		}).mouseout(function() {
			$( this ).removeClass("show");
		});		

		//SENSORES MENU
		$('.menuPrincipalContent .menuPrincipal #navbarSupportedContent #menu-menu-principal #menu-item-43 ul #menu-item-27').mouseover(function() {
			$(this).addClass("show");
		}).mouseout(function() {
			$( this ).removeClass("show");
		});

	$('form').submit(function(){
		var nome = $(':input[name=nome]').val();
		var email = $(':input[name=email]').val();
		var telefone = $(':input[name=telefone]').val();
		var produto = $(':input[name=produto]').val();
		var mensagem = $(':input[name=mensagem]').val();
		
		//NOME
		var errorNome = "";
		$('#errorNome').html("");
		if(nome === "") {
			$('#errorNome').html("Digite seu nome") ;

			$(':input[name=nome]').addClass('form-control-danger');
		}else{
			$('#errorNome').html("");
			$(':input[name=nome]').removeClass('form-control-danger');
		}

		//EMAIL
		if(email === "") {
			error += "Preencha o campo";
		}
		if(error) {
			$('#error').html(error);
			return false;
		}
		return true;
	});
});
