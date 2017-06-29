$(document).ready(function(){

	$("#nivel2").hide();
	$("#nivel3").hide();
	$("#nivel4").hide();
	$("#nivel5").hide();
	$("#receberLancamento").hide();

	var txt_natureza1, txt_natureza2, txt_natureza3, txt_natureza4, txt_natureza5;
	var natureza1, natureza2, natureza3, natureza4, natureza5;

	$("#natureza1").on('blur', function(){

		txt_natureza1 = $("#natureza1 option:selected").text();
		natureza1 = $("#natureza1 option:selected").val();

		$("#txt-status").empty();
		$("#txt-status").html("<h3>1ª Natureza Selecionada</h3><h5>"+txt_natureza1+"</h5><p>Você Deve Selecionar a 2ª Natureza</p>");

		$("#nivel1").hide();
		$("#nivel3").hide();
		$("#nivel4").hide();
		$("#nivel5").hide();
		$("#receberLancamento").hide();

		$.ajax({
            type:'post',
            dataType: 'json',
            url: url_nivel+natureza1,
            success: function(dados){
            	alert(dados);
            }
        });

		$("#nivel2").show();

	});

	$("#natureza2").on('blur', function(){

		txt_natureza2 = $("#natureza2 option:selected").text();
		natureza2 = $("#natureza2 option:selected").val();

		$("#txt-status").empty();
		$("#txt-status").html("<h3>2ª Natureza Selecionada</h3><h5>"+txt_natureza1+">>"+txt_natureza2+"</h5><p>Você Deve Selecionar a 3ª Natureza</p>");

		$("#nivel1").hide();
		$("#nivel2").hide();
		$("#nivel4").hide();
		$("#nivel5").hide();
		$("#receberLancamento").hide();
		$("#nivel3").show();

	});

	$("#natureza3").on('blur', function(){

		txt_natureza3 = $("#natureza3 option:selected").text();
		natureza3 = $("#natureza3 option:selected").val();

		$("#txt-status").empty();
		$("#txt-status").html("<h3>3ª Natureza Selecionada</h3><h5>"+txt_natureza1+">>"+txt_natureza2+">>"+txt_natureza3+"</h5><p>Você Deve Selecionar a 4ª Natureza</p>");

		$("#nivel1").hide();
		$("#nivel2").hide();
		$("#nivel3").hide();
		$("#nivel5").hide();
		$("#receberLancamento").hide();
		$("#nivel4").show();

	});

	$("#natureza4").on('blur', function(){

		txt_natureza4 = $("#natureza4 option:selected").text();
		natureza4 = $("#natureza4 option:selected").val();

		$("#txt-status").empty();
		$("#txt-status").html("<h3>4ª Natureza Selecionada</h3><h5>"+txt_natureza1+">>"+txt_natureza2+">>"+txt_natureza3+">>"+txt_natureza4+"</h5><p>Você Deve Selecionar a 5ª Natureza</p>");

		$("#nivel1").hide();
		$("#nivel2").hide();
		$("#nivel3").hide();
		$("#nivel4").hide();
		$("#receberLancamento").hide();
		$("#nivel5").show();

	});

	$("#natureza5").on('blur', function(){

		txt_natureza5 = $("#natureza5 option:selected").text();
		natureza5 = $("#natureza5 option:selected").val();

		$("#txt-status").empty();
		$("#txt-status").html("<h3>5ª Natureza Selecionada</h3><h5>"+txt_natureza1+">>"+txt_natureza2+">>"+txt_natureza3+">>"+txt_natureza4+">>"+txt_natureza5+"</h5><p>Todas as Naturezas Cadastradas</p>");

		$("#nivel1").hide();
		$("#nivel2").hide();
		$("#nivel3").hide();
		$("#nivel4").hide();
		$("#nivel5").hide();
		$("#receberLancamento").hide();

	});


});