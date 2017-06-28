<div class="panel panel-default">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title text-center" id="myModalLabel">Ativar Caixa do Mês</h2><hr>
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
                                <button id="BtnSalvar" class="btn btn-success text-center"><i class="fa fa-edit "></i> Salvar</button>
                                <a href="#" class="btn btn-primary text-center" data-dismiss="modal"><i class="fa fa-edit "></i>Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function() {

        $('#myModal').modal('show');

        $("#AtivaMes").mask("99/9999");
        $("#AtivaDataInicial").mask("99/99/9999");
        $("#AtivaDataFim").mask("99/99/9999");
        $("#AtivaValor").maskMoney({prefix:'R$ ', thousands:'.',decimal:','});

        $("#BtnSalvar").click(function(){
            $.ajax({
                url: '{ACAOFORM}',
                type: 'post',
                dataType: 'json',
                data: $('#formModal').serialize(),
                success: function(dados) {
                    if(dados.condicao == "CaixaAtivado"){
                        // swal({
                        //   title: "Erro!!!",
                        //   text: "Existe um Caixa Ativado - Para Inciar um novo caixa você precisa encerrar o caixa aberto!!",
                        //   type: "warning",
                        //   showCancelButton: true,
                        //   confirmButtonClass: "btn-danger",
                        //   confirmButtonText: "Encerrar Caixa",
                        //   closeOnConfirm: false
                        // },
                        // function(){
                        //  
                        // });

                        swal({
                          title: "Erro!!!! \n Caixa "+dados.mesativo+" Ativo",
                          text: "Para iniciar um novo caixa, esse caixa deve ser encerrado!",
                          type: "error",
                          showCancelButton: true,
                          confirmButtonClass: "btn-warning",
                          confirmButtonText: "Sim, Encerrar o Caixa",
                          cancelButtonText: "Não, Cancelar",
                          closeOnConfirm: false,
                          closeOnCancel: false
                      },
                      function(isConfirm) {
                          if (isConfirm) {
                             window.location = "<?php echo base_url('/financeiro/EncerrarCaixaMes')?>"
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
                    }
                },
                error: function() {
                    swal({
                      title: "OK!!!",
                      text: "Parabéns Caixa Ativado com Sucesso",
                      type: "success",
                      showCancelButton: true,
                      confirmButtonClass: "btn-warning",
                      confirmButtonText: "Confirma",
                      closeOnConfirm: false
                  },
                  function(){
                      window.location = "<?php echo base_url('/painel/Principal')?>"
                  });
                }
            });
            return false;

        });
    });

</script>