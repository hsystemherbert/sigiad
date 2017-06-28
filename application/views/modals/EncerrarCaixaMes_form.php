<div class="panel panel-default">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h2 class="modal-title text-center" id="myModalLabel">Encerrar Exercício do Mês {MESATIVO}</h2><hr>
                    <div class="modal-body">
                        <form action="{ACAOFORM}" method="POST" id="formModal">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                   <div class="form-group"> 
                                        <label for="AtivaMes">Mês:</label>
                                        <input type="text" id="AtivaMes" name="AtivaMes" value="{AtivaMes}" class="form-control" />
                                    </div> 
                                </div>
                                <div class="col-md-4">
                                   <div class="form-group"> 
                                        <label for="AtivaDataInicial">Data Inicial:</label>
                                        <input type="text" id="AtivaDataInicial" name="AtivaDataInicial" value="{AtivaDataInicial}" class="form-control" />
                                    </div> 
                                </div>
                                <div class="col-md-4">
                                   <div class="form-group"> 
                                        <label for="AtivaDataFim">Data Final:</label>
                                        <input type="text" id="AtivaDataFim" name="AtivaDataFim" value="{AtivaDataFim}" class="form-control" />
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-6">
                                   <div class="form-group"> 
                                        <label for="AtivaValor">Valor:</label>
                                        <input type="text" id="AtivaValor" name="AtivaValor" value="{AtivaValor}" class="form-control" />
                                    </div> 
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success text-center"><i class="fa fa-edit "></i> Salvar</button>
                                <a href="<?php echo base_url('/painel/Principal')?>" class="btn btn-primary text-center"><i class="fa fa-edit "></i>Cancelar</a>
                            </div>
                        </form>
                        <div class="col-md-12">
                            <button id="BtnAtivar" class="btn btn-warning">Ativar</button>
                        </div>
                        <!--div class="alert alert-danger"><p>Erro de Alerta</p></div-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

var condicao = "{CONDICAO}";

    $(document).ready(function() {

    $('#myModal').modal('show');

    $("#AtivaMes").mask("99/9999");
    $("#AtivaDataInicial").mask("99/99/9999");
    $("#AtivaDataFim").mask("99/99/9999");
    $("#AtivaValor").maskMoney({prefix:'R$ ', thousands:'.',decimal:','});

    $("#BtnAtivar").click(function(){
            $.ajax({
                url: '{ACAOFORM}',
                type: 'post',
                dataType: 'json',
                data: $('#CadFormConta').serialize(),
                success: function(data) {
                    if(data.condicao == "CaixaAtivado"){
                        swal({
                          title: "Erro!!!",
                          text: "Existe um Caixa Ativado - Para Inciar um novo caixa você precisa encerrar o caixa aberto!!",
                          type: "error",
                          showCancelButton: true,
                          confirmButtonClass: "btn-warning",
                          confirmButtonText: "Ativar Caixa",
                          closeOnConfirm: false
                        },
                        function(){
                          window.location = "<?php echo base_url('/financeiro/EncerrarCaixaMes')?>"
                        });
                    }
                },
                error: function(data) {
                    alert ("Erro Falha");
                }
            });
            return false;

    });
});
</script>