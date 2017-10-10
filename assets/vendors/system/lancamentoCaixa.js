$(document).ready(function(){

var Lancamento; 
var select_lotacao;
var lancamento_select = "saida";

  $('#selecao').hide();
  $('#select_plano').hide();
  $('#entrada').hide();
  $('#saida').hide();
  $('#form_entrada').hide();
  $('#form_saida').show();

  $("#example-basic").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    autoFocus: true
  });

  $('#TipoLancamento').change(function() {

       var $BOX_PANEL = $(this).closest('.x_panel'),
            $ICON = $(this).find('i'),
            $BOX_CONTENT = $BOX_PANEL.find('.x_content');
        
        // fix for some div with hardcoded fix class
        if ($BOX_PANEL.attr('style')) {
            $BOX_CONTENT.slideToggle(200, function(){
                $BOX_PANEL.removeAttr('style');
            });
        } else {
            $BOX_CONTENT.slideToggle(200); 
            $BOX_PANEL.css('height', 'auto');  
        }

        $ICON.toggleClass('fa-chevron-up fa-chevron-down');

        Lancamento = $(this).val();

       if(Lancamento == 1) {

        $('#TipoLancamento').val("");
        $('#saida').hide();
        $('#selecao').hide();
        $('#entrada').show();

       }
        if(Lancamento == 2) {
 
        $('#TipoLancamento').val("");
        $('#entrada').hide();
        $('#selecao').hide();
        $('#saida').show();
       }

  });

  $("#select_lotacao").change(function() {

    select_lotacao = $("#select_lotacao :selected");

  if (select_lotacao.val() == "") {
    alert("Você Deve Selecionar uma Lotação");
  }
  lancamento_select = "entrada";

  $('#entrada').hide();
  $('#form_entrada').show();
  $('#small_form_entrada').html("Congregação: "+select_lotacao.text());

  });

  $("#select_lotacao_saida").change(function() {

    select_lotacao = $("#select_lotacao_saida :selected");

    if (select_lotacao.val() == "") {
    alert("Você Deve Selecionar uma Lotação");
    }

    lancamento_select = "saida";

    $('#saida').hide();
    $('#form_saida').show();
    $('#small_form_saida').html("Congregação: "+select_lotacao.text());

  });

  $('.btn-app').click(function () {

      $('#app-button-id').hide();


  });

  $('.close-panel').click(function () {
        
       if(Lancamento == 1) {

        $('#entrada').hide();
        $('#form_entrada').hide();
        $('#selecao').show();

        $('#select_lotacao').val("");
        select_lotacao = "";
        $('#small_form_entrada').append("");


       }
        if(Lancamento == 2) {

        $('#saida').hide();
        $('#form_saida').hide();
        $('#selecao').show();

        $('#select_lotacao_saida').val("");
        select_lotacao = "";
        $('#small_form_saida').append("");
       }
        
  });

  $("#cod_plano_contas").change(function() {

    var codigo = $(this).val();

    alert("Codigo do plano de contas: "+codigo);

  });

  $('#BbtnModalPlano').click(function () {

    if (lancamento_select == "entrada"){

    }
    if (lancamento_select == "saida" ){

      
    }

  });

});