$(document).ready(function ()
{

	var EstadoCivil, BatismoAgua, BatismoEspiritoSanto;

	var success = false;
	var dadosEclesia  = false;

	var MembroRol = $("#RolMembro").val();
	var MembroID  = $("#CodMembro").val();

	$("#DadosPessoais").show();
	$("#DadosEclesiasticos").hide();
	$("#divConjuge").hide();
	$("#divData").hide();
	$("#DivBatismoEspiritoSantoData").hide();
	$("#DivBatismoAguasData").hide();
	$("#DivBatismoAguasIgreja").hide();
	$("#alert-documento").hide();
	$("#alert-geral").hide();
	$("#CodMembro").prop("disabled", true);
	$("#RolMembro").prop("disabled", true);
	$("#alert-geral-eclesia").hide();
	

	$ ('input'). iCheck ({
    	CheckboxClass: 'icheckbox_flat',
    	RadioClass: 'iradio_flat'
  	});

  	if (MembroRol == "")
  	{
  		dadosEclesia = false;

  	} else{

  		dadosEclesia = true;
  	}

	$("#EstadoCivil").change(function()
	{

	    EstadoCivil = $("#EstadoCivil :selected");

	  if (EstadoCivil.val() == "casado")
	  {

	  	$("#divConjuge").show();
		$("#divData").show();

	  } else
	  {
	  	$("#divConjuge").hide();
		$("#divData").hide();
	  }

	});

	$(".close-eclesia").click(function()
	{
		
		$("#DadosPessoais").show();
		$("#DadosEclesiasticos").hide();
		$("#Historico").hide();


	});

	$(".collapse-eclesia").click(function()
	{
		
		if (success == true || MembroID != "")
		{
			$("#DadosPessoais").hide();
			$("#DadosEclesiasticos").show();

		} else
		{
			swal("Atenção!", "Você primeiro deve Cadastrar os dados Pessoais do Membro", "error");
		}

	});

	$(".collapse-pessoal").click(function()
	{
		
		$("#DadosPessoais").show();
		$("#DadosEclesiasticos").hide();

	});

	$("#BatismoAguas").change(function()
	{

	    BatismoAguas = $("#BatismoAguas :selected");

	  if (BatismoAguas.val() == "sim")
	  {

	  	$("#DivBatismoAguasData").show();
		$("#DivBatismoAguasIgreja").show();

	  } else
	  {
	  	$("#DivBatismoAguasData").hide();
		$("#DivBatismoAguasIgreja").hide();
	  }

	});

	$("#BatismoEspiritoSanto").change(function()
	{

	    BatismoEspiritoSanto = $("#BatismoEspiritoSanto :selected");

	  if (BatismoEspiritoSanto.val() == "sim")
	  {

	  	$("#DivBatismoEspiritoSantoData").show();
	  	$("#DivProcedencia").removeClass("col-md-8").addClass("col-md-5");

	  } else
	  {
	  	$("#DivBatismoEspiritoSantoData").hide();
		$("#DivProcedencia").removeClass("col-md-5").addClass("col-md-8");
	  }

	});

	$(".collapse-salvar-pessoal").click(function()
	{
		
		var erro    = false;
		var docCpf  = false;
		var docRg   = false;

		var CodMembro   		= $("#CodMembro").val();
		var Naturalidade 		= $("#Naturalidade").val();
		var EstadoNaturalidade 	= $("#EstadoNaturalidade").val();
		var Logradouro 			= $("#Logradouro").val();
		var Numero 				= $("#Numero").val();
		var Bairro 				= $("#Bairro").val();
		var Cep 				= $("#Cep").val();
		var EstadoLogadrouro 	= $("#EstadoLogadrouro").val();
		var NomePai 			= $("#NomePai").val();
		var NomeMae 			= $("#NomeMae").val();
		var EstadoCivil 		= $("#EstadoCivil").val();
		var Conjuge 			= $("#Conjuge").val();
		var DataCasamento 		= $("#DataCasamento").val();
		var Telefone 			= $("#Telefone").val();
		var Email 				= $("#Email").val();
		var DataEmissao 		= $("#DataEmissao").val();
		var OrgaoEmissor 		= $("#OrgaoEmissor").val();


		if($("#NomeMembro").val() == null || $("#NomeMembro").val() == undefined || $("#NomeMembro").val() == "" )
		{
			erro = true;

			$('#item-NomeMembro').addClass('bad');

			$('#NomeMembro').change(function()
			{
				var nome = $(this).val()

	   			if ( nome != "")
	   			{
	   				var NomeMembro 	= $("#NomeMembro").val();
	      			$('#item-NomeMembro').removeClass('bad');
	   			}

			});
		} else
		{
			var NomeMembro 	= $("#NomeMembro").val();
			$('#item-NomeMembro').removeClass('bad');
		}

		if($("#DataNascimento").val() == null || $("#DataNascimento").val() == undefined || $("#DataNascimento").val() == "" )
		{
			
			erro = true;

			$('#item-DataNascimento').addClass('bad');

			$('#DataNascimento').change(function()
			{
				var nascimento = $(this).val()

	   			if ( nascimento != "")
	   			{
	   				var DataNascimento 	= nascimento;
	      			$('#item-DataNascimento').removeClass('bad');
	   			}

			});
		} else
		{
			var DataNascimento 	= $("#DataNascimento").val();
			$('#item-DataNascimento').removeClass('bad');
		}

		if($("#Sexo").val() == null || $("#Sexo").val() == undefined || $("#Sexo").val() == "" )
		{
			erro = true;

			$('#item-Sexo').addClass('bad');

			$('#Sexo').change(function()
			{
				var sexo = $(this).val()

	   			if ( sexo != "")
	   			{
	   				var SexoMembro 	= sexo;
	      			$('#item-Sexo').removeClass('bad');
	   			}

			});
		} else
		{
			var SexoMembro 	= $("#Sexo").val();
			$('#item-Sexo').removeClass('bad');
		}

		if($("#Cidade").val() == null || $("#Cidade").val() == undefined || $("#Cidade").val() == "" )
		{
			erro = true;

			$('#item-Cidade').addClass('bad');

			$('#Cidade').change(function()
			{
				var cidade = $(this).val()

	   			if ( cidade != "")
	   			{
	   				var CidadeMembro 	= cidade;
	      			$('#item-Cidade').removeClass('bad');
	   			}

			});
		} else
		{
			var CidadeMembro 	= $("#Cidade").val();
			$('#item-Cidade').removeClass('bad');
		}

		if($("#Cpf").val() == null || $("#Cpf").val() == undefined || $("#Cpf").val() == "" )
		{
			docCpf  = true;

			$('#item-cpf').addClass('bad');

			$('#Cpf').change(function()
			{
				var cpf = $(this).val()

	   			if ( cpf != "")
	   			{
	   				var cpfMembro 	= cpf;
	      			$('#item-cpf').removeClass('bad');
	      			docCpf = false;
	   			}

			});
		} else
		{
			var cpfMembro 	= $("#Cpf").val();
			$('#item-cpf').removeClass('bad');
			docCpf = false;
		}

		if($("#Identidade").val() == null || $("#Identidade").val() == undefined || $("#Identidade").val() == "" )
		{

			docRg  = true;

			$('#item-rg').addClass('bad');

			$('#Identidade').change(function()
			{
				var rg = $(this).val()

	   			if ( rg != "")
	   			{
	   				var IdentidadeMembro 	= rg;
	      			$('#item-rg').removeClass('bad');
	   			}

			});
		} else
		{
			var IdentidadeMembro 	= $("#Identidade").val();
			$('#item-rg').removeClass('bad');
		}

		if (docRg == true && docCpf == true)
		{
			erro = true;
			$("#alert-documento").show();
			$("#alert-documento").html("<h5>Você deve obrigatoriamete Inserir um dos Documentos para realizar o Cadastro</h5>");

		} else
		{

			$("#alert-documento").hide();
			$("#alert-documento").html("");
			$('#item-rg').removeClass('bad');
			$('#item-cpf').removeClass('bad');
		}

		if (erro == true)
		{
			
			$("#alert-geral").show();
			$("#alert-geral").html("<h5>Não Foi possível fazer o cadastro!! Campos em Vermelho obrigatórios para serem preenchidos</h5>");

		} else
		{
			
				$("#alert-geral").hide();
				$("#alert-geral").html("");


			// Validação efetuada, processo de gravação dos dados.

			var objects = {CodMembro: CodMembro, NomeMembro: NomeMembro, DataNascimento: DataNascimento, EstadoNaturalidade: EstadoNaturalidade, SexoMembro: SexoMembro, Logradouro: Logradouro, Numero: Numero, Bairro: Bairro, Cidade: CidadeMembro, Cep: Cep, EstadoLogadrouro: EstadoLogadrouro, NomePai: NomePai, NomeMae: NomeMae, EstadoCivil: EstadoCivil, Conjuge: Conjuge, DataCasamento: DataCasamento, Telefone: Telefone, Email: Email, cpfMembro: cpfMembro, Identidade: IdentidadeMembro, DataEmissao: DataEmissao, OrgaoEmissor: OrgaoEmissor};
			urlSalvar = urlPost+"Salvar";

			$.ajax({
			  type: "POST",
			  dataType: 'json',
			  url: urlSalvar,
			  data: objects,
			  success: function(dados){
			  	
			  	if (dados == "sucesso")
			  	{
			  		swal("Parabéns!", "Membro Cadastrado com Sucesso!!!", "success");
			  		success = true;
			  	}
			  	if (dados == "Atualizado")
			  	{
			  		swal("Parabéns!", "Membro Atualizado com Sucesso!!!", "success");
			  	}
			  	if (dados == "Error-cadastro")
			  	{
			  		swal("OPS!", "Erro no Cadastro do Membro!!! Verificar Dados", "error");
			  	}
			  	if (dados == "Error-atualizacao")
			  	{
			  		swal("OPS!", "Erro na Atualização do Membro!!! Verificar Dados", "error");
			  	}
			  	if(dados == "ValidaDoc")
			  	{
			  		swal("ERRO!", "Membro já cadastrado! Verifique os Dados", "error");
			  		$('#item-cpf').addClass('bad');
			  		$('#item-rg').addClass('bad');
			  		$('#item-NomeMembro').addClass('bad');

			  	}
			  	if(dados == "ValidaNome")
			  	{
			  		swal("ERRO!", "Nome Já Cadastrado - Verifique os dados", "error");
			  		$('#item-NomeMembro').addClass('bad');
			  	}
			  	if(dados == "ValidationRG")
			  	{
			  		swal("ERRO!", "Número de Identidade já cadastrado para um Membro", "error");
			  		$('#item-rg').addClass('bad');
			  	}
			  	if(dados == "ValidaitonCpf")
			  	{
			  		swal("ERRO!", "Número de CPF já cadastrado para um Membro", "error");
			  		$('#item-cpf').addClass('bad');
			  	}
			  	if (dados == "Erro-validation")
			  	{
			  		swal("OPS!", "Erro na Validação!!! Verificar Dados", "error");
			  	}
			  }
			});

		}

	});

	$(".collapse-salvar-eclesia").click(function()
	{
		
		var error   = false;

		var CodMembro 					= $('#CodMembro').val();
		var RolMembro   				= $("#RolMembro").val();
		var CargoMembro   				= $("#CargoMembro").val();	
		var FuncaoMembro   				= $("#FuncaoMembro").val();	
		var BatismoAguas   				= $("#BatismoAguas").val();	
		var IgrejaBatismoAguas  		= $("#IgrejaBatismoAguas").val();	
		var DataBatismoAguas   			= $("#DataBatismoAguas").val();	
		var BatismoEspiritoSanto   		= $("#BatismoEspiritoSanto").val();	
		var DataBatismoEspiritoSanto    = $("#DataBatismoEspiritoSanto").val();	
		var DescricaoProcedencia   		= $("#DescricaoProcedencia").val();	
	

		if ($("#LotacaoMembro").val() == null || $("#LotacaoMembro").val() == undefined || $("#LotacaoMembro").val() == "")
		{
			error = true;

			$('#item-lotacao').addClass('bad');

			$('#LotacaoMembro').change(function()
			{
				var lot = $(this).val()

	   			if ( lot != "")
	   			{
	   				var LotacaoMembro 	= lot;
	      			$('#item-lotacao').removeClass('bad');
	   			}

			});
		} else
		{
			var LotacaoMembro 	= $("#LotacaoMembro").val();
			$('#item-lotacao').removeClass('bad');
		}

		if ($("#TipoMembro").val() == null || $("#TipoMembro").val() == undefined || $("#TipoMembro").val() == "")
		{
			error = true;

			$('#item-tipo').addClass('bad');

			$('#TipoMembro').change(function()
			{
				var tipo = $(this).val()

	   			if ( tipo != "")
	   			{
	   				var TipoMembro 	= tipo;
	      			$('#item-tipo').removeClass('bad');
	   			}

			});
		} else
		{
			var TipoMembro 	= $("#TipoMembro").val();
			$('#item-tipo').removeClass('bad');
		}

		if ($("#SituacaoCadastral").val() == null || $("#SituacaoCadastral").val() == undefined || $("#SituacaoCadastral").val() == "")
		{
			error = true;

			$('#item-situacao').addClass('bad');

			$('#SituacaoCadastral').change(function()
			{
				var situacao = $(this).val()

	   			if ( situacao != "")
	   			{
	   				var SituacaoCadastral 	= situacao;
	      			$('#item-situacao').removeClass('bad');
	   			}

			});
		} else
		{
			var SituacaoCadastral 	= $("#SituacaoCadastral").val();
			$('#item-situacao').removeClass('bad');
		}

		if ($("#Procedencia").val() == null || $("#Procedencia").val() == undefined || $("#Procedencia").val() == "")
		{
			error = true;

			$('#item-procedencia').addClass('bad');

			$('#Procedencia').change(function()
			{
				var proced = $(this).val()

	   			if ( proced != "")
	   			{
	   				var Procedencia 	= proced;
	      			$('#item-procedencia').removeClass('bad');
	   			}

			});
		} else
		{
			var Procedencia 	= $("#Procedencia").val();
			$('#item-procedencia').removeClass('bad');
		}

		if (error == true)
		{
			
			$("#alert-geral-eclesia").show();
			$("#alert-geral-eclesia").html("<h5>Não Foi possível fazer o cadastro!! Campos em Vermelho obrigatórios para serem preenchidos</h5>");

		} else
		{
			
				$("#alert-geral-eclesia").hide();
				$("#alert-geral-eclesia").html("");


			// Validação efetuada, processo de gravação dos dados.

			var objects = {CodMembro: CodMembro, RolMembro: RolMembro, CargoMembro: CargoMembro, FuncaoMembro:FuncaoMembro, BatismoAguas: BatismoAguas, IgrejaBatismoAguas: IgrejaBatismoAguas, DataBatismoAguas: DataBatismoAguas, BatismoEspiritoSanto: BatismoEspiritoSanto, DataBatismoEspiritoSanto: DataBatismoEspiritoSanto, DescricaoProcedencia: DescricaoProcedencia, LotacaoMembro: LotacaoMembro, TipoMembro: TipoMembro, SituacaoCadastral: SituacaoCadastral, Procedencia: Procedencia};
			var urlSalvar = urlPost+"SalvarEclesia";

			$.ajax({
			  type: "POST",
			  dataType: 'json',
			  url: urlSalvar,
			  data: objects,
			  success: function(dados){
			  	
			  	if (dados == "sucesso")
			  	{
			  		// swal("OK!", "Dados Eclesiásticos Cadastrado com Sucesso!!!", "success");
			  		// location.reload();

			  		swal({
					  title: "Parabéns Salvo com Sucesso!",
					  text: "Deseja Cadastrar um Número de ROL?",
					  type: "info",
					  showCancelButton: true,
					  closeOnConfirm: false,
					  showLoaderOnConfirm: true,
					},
					function(){
					  setTimeout(function(){
					    swal("Ajax request finished!");
					  }, 2000);
					});

			  		//location.reload();

			  	}
			  	if (dados == "Atualizado")
			  	{
			  		swal("Parabéns!", "Dados Eclesiásticos Atualizado com Sucesso!!!", "success");
			  		location.reload();
			  	}
			  	if (dados == "Error-cadastro")
			  	{
			  		swal("OPS!", "Erro no Cadastro dos Dados Eclesiásticos!!! Verificar Dados", "error");
			  	}
			  	if (dados == "Error-atualizacao")
			  	{
			  		swal("OPS!", "Erro na Atualização dos Dados Eclesiásticos!!! Verificar Dados", "error");
			  	}
			  	if (dados == "Erro-validation")
			  	{
			  		swal("OPS!", "Erro na Validação!!! Verificar Dados", "error");
			  	}
			 }
			});
		}

	});

	$(".collapse-livroRol").click(function(){
		
		if(dadosEclesia == false)
		{
			swal("DESCULPE!", "Você primeiro deve salvar os dados...", "error");
		} else
		{
			$("#ModalCadRol").modal("show");
		}
	});

	//Upload de imagens e arquivos//

	//Upload Arquivo

	$("#input-b9").fileinput({
        showPreview: true,
        showUpload: false,
        elErrorContainer: '#kartik-file-errors',
        allowedFileExtensions: ["jpg", "png", "gif"]
        //uploadUrl: '/site/file-upload-single'
    });

    //Upload Foto
    $("#imageFoto").fileinput({

        uploadUrl: urlPost+'UploadFoto',
        UploadAsync: false,
        //showPreview: true,
        showUpload: true,

        // elErrorContainer: '#kartik-file-errors',
        // allowedFileExtensions: ["jpg", "jpeg", "png", "gif"],
        
    }). on ( 'fileuploaded' , function ( event , data , previewId , index ) { 

    	
    	$('#ModalFoto').modal('hide');
    	
	});

	$(".collapse-arquivos").click(function(){
		
		if (success == true || MembroID != "")
		{
			
			$("#ModalArquivos").modal("show");

		} else
		{
			swal("Atenção!", "Você primeiro deve Cadastrar os dados Pessoais do Membro", "error");
		}
	});

	$(".collapse-arquivos-foto").click(function(){
		
		if (success == true || MembroID != "")
		{
			
			$("#ModalFoto").modal("show");

		} else
		{
			swal("Atenção!", "Você primeiro deve Cadastrar os dados Pessoais do Membro", "error");
		}
	});

});