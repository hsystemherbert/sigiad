$(document).ready(function(){

	$("#planocontas_1nivel").hide();
	$("#planocontas_2nivel").hide();
	$("#planocontas_3nivel").hide();
	$("#planocontas_4nivel").hide();
	$("#planocontas_5nivel").hide();
	

	$("#input_nivel1").hide();

	$( "#novoplano" ).click(function() {
	  	$("#select_nivel1").hide();
	  	$("#input_nivel1").show();
	});

});