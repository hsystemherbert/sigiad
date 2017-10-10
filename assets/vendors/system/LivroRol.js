$(document).ready(function(){

	var valida 		= false;
	var mensagem    = "";

	$("#alert-geral").hide();

	

	$("#NomeMembro").change(function(){

		var nome      = $(this).val();
		var urlSalvar = url+"Consultar";
		var objects   = {CodMembro : nome};
		
		if (nome == "")
		{
			mensagem = "Você deve selecionar um Nome";
		  	swal("Falha",mensagem,"error");
		  	$("#alert-geral").hide();

		} else
		{
			$.ajax({
			  type: "POST",
			  dataType: 'json',
			  url: urlSalvar,
			  data: objects,
			  success: function(dados){

			  	if(dados == "validation")
			  	{
			  		valida = false;
			  		$("#alert-geral").hide();
			  		$("#alert-geral").html("");

			  	}
			  	if(dados == "Error" || dados == "ErrorCod")
			  	{
			  		valida = true;
			  		mensagem = "Erro no Servidor"
			  		swal("Falha",mensagem,"error");

			  		$("#alert-geral").show();
					$("#alert-geral").html("<p>"+mensagem+"</p>");

			  	}
			  	if(dados == "batismo")
			  	{
			  		valida = true;
			  		mensagem = "Você deve cadastrar a Data de Batismo"
			  		swal("Falha",mensagem,"error");

			  		$("#alert-geral").show();
					$("#alert-geral").html("<p>"+mensagem+"</p>");

			  	}
			  	if(dados == "descProcedencia")
			  	{
			  		valida = true;
			  		mensagem = "Você deve cadastrar a Descrição da Procedência"
			  		swal("Falha",mensagem,"error");

			  		$("#alert-geral").show();
					$("#alert-geral").html("<p>"+mensagem+"</p>");

			  	}
			  	if(dados == "DescBatismo")
			  	{
			  		valida = true;
			  		mensagem = "Você deve cadastrar a Data de Batismo e a Descrição de Procedência";
			  		swal("Falha",mensagem,"error");

			  		$("#alert-geral").show();
					$("#alert-geral").html("<p>"+mensagem+"</p>");
			  	}
			  }
			});
		}
	});

	$(".collapse-salvar").click(function(){

		var name 	   = $("#NomeMembro").val();
		var date 	   = $("#DataEntrada").val();
		var Membro     = $("#NomeMembro :selected");


		if(name == "" || date == "")
		{
			mensagem = "Você deve preencher todos os dados";
			swal("Falha",mensagem,"error");

			$("#alert-geral").show();
			$("#alert-geral").html("<p>"+mensagem+"</p>");

		} else
		{

			if (valida == true)
			{
				mensagem = "ROL não pode ser Cadastrado, verifique dados pendentes";
				swal("Falha",mensagem,"error");

				$("#alert-geral").show();
				
			} else
			{
				$("#alert-geral").hide();

				var urlSalvar = url+"Salvar";
				var objects   = {CodMembro : name, DataEntrada: date};
				
				$.ajax({
				  type: "POST",
				  dataType: 'json',
				  url: urlSalvar,
				  data: objects,
				  success: function(dados){

				  	if(dados.result == "success")
				  	{
				  		var rol = "ROL: "+dados.RolMembro+" Cadastrado para: "+Membro.text();
				  		swal("Parabéns!!!",rol,"success");
				  		location.reload();
				  	}
				  }
				});
			}
		}
	});

	// Fim click collapse-salvar//

	$(".collapse-pesquisa").click(function(){

		$('#ModalPesquisa').modal('show');
		$('#tabela').html("");

		var urlSalvar = url+"Lista";

		$.ajax({
		  type: "POST",
		  dataType: 'json',
		  url: urlSalvar,
		  success: function(dados){

		  	var cont = dados.data.length;

		  	for (var i = 0; i < cont; i++)
		  	{
		  		$('#tabela').html('<tr><td>'+dados.data[i].RolID+'</td><td>'+dados.data[i].NomeMembro+'</td><td>'+dados.data[i].DataEntrada+'</td></tr>');
		  	}
		  	
		  }
		});

		$("#NomeMembroRol").change(function(){

			var NomeMembroRol = $(this).val();
			
		});
	});
});

// swal({
// 	  title: "Ajax request example",
// 	  text: "Submit to run ajax request",
// 	  type: "info",
// 	  showCancelButton: true,
// 	  closeOnConfirm: false,
// 	  showLoaderOnConfirm: true,
// 	},
// 	function(){
// 	  setTimeout(function(){
// 	    swal("Ajax request finished!");
// 	  }, 2000);
// 	});