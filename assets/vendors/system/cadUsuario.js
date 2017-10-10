$(document).ready(function(){

	$( "#enviar" ).click(function() {

		var nome 	  = $('#nome').val();
			email 	  = $('#email').val();
			email2	  = $('#email2').val();
			telefone  = $('#telefone').val();
			setor	  = $('#setor').val();
			permissao = $('#permissao').val();
			cargo	  = $('#cargo').val();
			senha     = $('#senha').val();
			senha2    = $('#senha2').val();

	if(nome !== null && nome !== undefined && nome !== ""){
		
		$('#item-nome').addClass('badsucess');
		var $nome = nome;
	
	} else{
		
		$('#item-nome').addClass('bad');
		$('#alert-nome').append("<i>Insira um Nome válido</i>");

		$('#nome').change(function() {

			var nome = $(this).val()

   			if ( nome != ""){

   				var $nome = nome;
      			$('#item-nome').removeClass('bad');
   			}

		});

	}

	if(email !== null && email !== undefined && email !== ""){
		
		var $email = email;
	
	} else{
		$('#item-email').addClass('bad');
		$('#alert-email').append("<i>Insira um E-mail válido</i>");

		$('#email').change(function() {

			var email = $(this).val()

   			if ( email != ""){

   				var $email = email;
      			$('#item-email').removeClass('bad');
   			}

		});
	}

	if(email2 !== null && email2 !== undefined && email2 !== ""){

		var $email2 = email2;
	
	// } else{

	// 	$('#item-email2').addClass('bad');
	// 	$('#alert-email2').append("<i>Insira um E-mail válido</i>");

	// 	// $('#email2').change(function() {

	// 	// 	var email2 = $(this).val()

 //  //  			if (email2 != ""){

 //  //  				var $email2 = email2
 //  //  				$('#item-email2').removeClass('bad');
 //  //  			}      		

	// 	// });
	}

	if ($email2 == $email){

		var $email_validation = $email2;

	} else {

		$('#item-email2').addClass('bad');
		$('#alert-email2').append("<i>Email não confere</i>");
      	$('#email2').val("");

      	$('#email2').change(function() {

			var email2 = $(this).val();

   			if ( email2 != $email) {

		      	$('#email2').val("");
   			}

   			if (email2 == $email){

   				var $email2 = email2
   				$('#item-email2').removeClass('bad');
   			}      		

		});

	}

	if(setor !== null && setor !== undefined && setor !== ""){
		
		var $setor = setor;
	
	} else{

		$('#item-setor').addClass('bad');
		$('#alert-setor').append("<i>Selecione um setor</i>");
	}
	
	if(permissao !== null && permissao !== undefined && permissao !== ""){
		
		var $permissao = permissao;
	
	} else{
		$('#item-permissao').removeClass('bad');
		$('#alert-permissao').append("");
		$('#item-permissao').addClass('bad');
		$('#alert-permissao').append("<i>Selecione uma permissao</i>");
	}

	if(senha !== null && senha !== undefined && senha !== ""){
		
		var $senha = senha;
			minCaracteresSenha = 8;
			cont_senha = parseInt(senha.length);

			if(cont_senha <= minCaracteresSenha){
				
				$('#alert-senha').append("<i>Insira uma senha válida</i>");
				$('#senha').val("");

			} else {

			}

		alert(cont_senha);
	
	} else{
		$('#item-senha').addClass('bad');

		$('#alert-senha').append("<i>Insira uma senha válida</i>");
	}
	if(senha2 !== null && senha2 !== undefined && senha2 !== ""){
		
		var $senha2 = senha2;
	
	} else{
		$('#item-senha2').addClass('bad');

		$('#alert-senha2').append("<i>Insira uma senha válida</i>");
	}
	if(senha2 == senha){
		
		var $senha_validation = senha2;
	
	} else{
		$('#item-senha2').addClass('bad');

		$('#alert-senha2').append("<i>Senha não confere</i>");
		$('#senha').val("");
		$('#senha2').val("");
	}

	});

});