$(document).ready(function() {
	
	$('form').submit(function(){
		var nome = $(':input[name=nome]').val();
		var email = $(':input[name=email]').val();
		var telefone = $(':input[name=telefone]').val();
		var produto = $(':input[name=produto]').val();
		var mensagem = $(':input[name=mensagem]').val();
		
		//ERROR
		

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
		//TELEFONE
		//PRODUTO
		//MENSAGEM




		if(error) {
			$('#error').html(error);
			return false;
		}

		return true;
	});

});
