<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1">
                    <img src="<?php echo base_url('assets/img/icones/72m.png')?>" style="padding-left: 20px;">
                </div>
                <div class="col-md-8">
                    <h2 style="padding-left: 18px;">LANÇAMENTO DE CAIXA - NÃO NOMINAL</h2>
                </div>
                <div class="col-md-2">
                    <h2 style="padding-left: 15px;">{MES_ATIVO}</h2>
                </div>
            </div>
        </div> 
        <hr />
        <div class="col-md-12">
            <div class="alert alert-info" style="margin-top: -15px">
                <p style="margin-left: 20px; text-align: center;">Este Formulário é somente para lançamentos <b>NÃO NOMINAIS</b> - para lançamentos NOMINAIS usar <a href="" class="btn">Lançamento Nominal</a></p>
            </div>
        </div>
        <div class="row" style="margin-top: -15px">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="row">
                        <form action="{ACAOFORM}" method="post" role="form" id="lancamentoCaixa">
                            <div class="col-md-12">
                                <div class="col-md-1">
                                    <div class="form-group"> 
                                        <label for="LancamentoID">Código</label>
                                        <input type="text" id="LancamentoID" name="LancamentoID" value="{LancamentoID}" class="form-control" disabled />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group"> 
                                        <label for="DataLancamento">Data Lançamento:</label>
                                        <input type="text" id="DataLancamento" name="DataLancamento" value="{DataLancamento}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-1 text-center" style="margin-top: 25px;">
                                    <input type="button" data-toggle="modal" data-target="#ModalPlano" class="btn btn-info btn-sm" value="Evento">
                                   
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group"> 
                                        <label for="LancLotacao">Lotação: &nbsp <a href="" data-toggle="modal" data-target="#ModalRamo"><i class="fa fa-edit "></i></a></label>
                                        <select name="LancLotacao" id="LancLotacao" class="form-control">
                                            <option value="">Selecione...</option>
                                            {BLC_LOTACAO}
                                            <option value="{ID}">{LOTACAO}</option>
                                            {/BLC_LOTACAO}
                                        </select>
                                    </div>
                                </div>
                                 <div class="col-md-2">
                                    <div class="form-group"> 
                                        <label for="Movimento">Movimento:</label>
                                        <select name="Movimento" id="Movimento" class="form-control">
                                            <option value="">Selecione...</option>
                                            <option value="1">Entrada</option>
                                            <option value="2">Saída</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="col-sm-2">
                                    <div class="form-group"> 
                                        <label for="TipoDocumento">Documento: &nbsp <a href="" data-toggle="modal" data-target="#ModalRamo"><i class="fa fa-edit "></i></a></label>
                                        <select name="TipoDocumento" id="TipoDocumento" class="form-control">
                                            <option value="">Selecione...</option>
                                            {BLC_TIPODOCUMENTO}
                                            <option value="{ID}">{DOCUMENTO}</option>
                                            {/BLC_TIPODOCUMENTO}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-2">
                                    <div class="form-group"> 
                                        <label for="Documento">Nº Documento:</label>
                                        <input type="text" id="Documento" name="Documento" value="{Documento}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group"> 
                                        <label for="Historico">Histórico</label>
                                        <input type="text" id="Historico" name="Historico" value="{Historico}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group"> 
                                        <label for="ValorLancamento">Valor:</label>
                                        <input type="text" id="ValorLancamento" name="ValorLancamento" value="{ValorLancamento}" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-1" style="margin-top: 25px;">
                                   <a href="" data-toggle="modal" data-target="#ModalPlano" id="BbtnModalPlano" class="btn btn-warning"><i class="fa fa-edit"></i>Plano</a>
                                </div>
                                <div class="col-md-1"">
                                    <div class="form-group" id="CodigoID"> 
                                        <label for="CodigoPlano">Cod:</label>
                                        <input type="text" id="CodigoPlano" name="CodigoPlano" value="{PlanoContaID}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group" id="PlanoCodDiv"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group" id="PlanoContaDiv"></div>
                                </div>
                                <div class="col-md-4">
                                    <div style="text-align: right; padding-right: 30px;margin-top: 28px;">
                                        <button type="submit" id="btnSalvar" class="btn btn-success"><i class="fa fa-edit "></i> Salvar</button>
                                        <a href="<?php echo base_url('painel/Principal')?>" class="btn btn-warning"><i class="fa fa-edit "></i>Cancelar</a>
                                    </div>
                                </div>                        
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                          <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="">
                                <h3>{VALOR_INICIAL}</h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                SALDO INICIAL
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                          <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="">
                              <h3>{VALOR_ENTRADAS}</h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                TOTAL DE ENTRADAS
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                          <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="">
                                <h3>{VALOR_SAIDAS}</h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                TOTAL DE SAÍDAS
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                          <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="">
                              <h3>{TOTAL_CAIXA}</h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                TOTAL EM CAIXA
                            </div>
                          </div>
                        </div>
                  </div>
                </div><hr>
                 <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Lançamento de Caixa não Nominal  - <b class="right">Mês Ativo: {MES_ATIVO}</b>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-form">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Movimento</th>
                                                <th>Data</th>
                                                <th>Lotação</th>
                                                <th>Histórico</th>
                                                <th>Valor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {BLC_DADOS}
                                            <tr class="odd gradeX">
                                                <td style="width: 8px" class="text-center">{ID}</td>
                                                <td style="width: 8px">{MOVIMENTO}</td>
                                                <td style="width: 50px">{DATA}</td>
                                                <td style="width: 100px">{LOTACAO}</td>
                                                <td style="width: 220px">{HISTORICO}</td>
                                                <td style="width: 20px">{VALOR}</td>
                                            </tr>
                                        {/BLC_DADOS}
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="modal fade" id="ModalPlano" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h2 class="modal-title text-center" id="myModalLabel">Selecionar Plano de Contas</h2><hr>
                    <div class="modal-body panel panel-default">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="col-md-3">
                                    <a href="javascript:func()" id="Receitas" class="btn btn-primary btn-lg">Receitas</a>
                                </div>
                                <div class="col-md-3">
                                    <a href="javascript:func()" id="Despesas" class="btn btn-primary btn-lg">Despesas</a>
                                </div>
                                <div class="col-md-3">
                                    <a href="javascript:func()" id="Ativos" class="btn btn-primary btn-lg">Ativos</a>
                                </div>
                                <div class="col-md-3">
                                    <a href="javascript:func()" id="Passivos" class="btn btn-primary btn-lg">Passivos</a>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="panel">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <input type="text" id="CodPlano" name="CodPlano" value="{CodPlano}" placeholder="Código" class="form-control">
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" id="NomePlano" name="NomePlano" value="{NomePlano}" placeholder="Nome do Plano de Contas"  class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Advanced Tables -->
                                <div class="">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover lista-clientes" id="dataTables-form">
                                                <thead>
                                                    <tr>
                                                        <th align="center">COD</th>
                                                        <th>Código</th> 
                                                        <th>Plano de Conta</th> 
                                                    </tr>
                                                </thead>
                                                <tbody id="tabela">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--End Advanced Tables -->
                            </div>
                        </div>
                        <div class="col-md-12 text-center" style="margin-top: -20px">
                            <button type="button" data-dismiss="modal" class="btn btn-danger">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $(document).ready(function () {

        $('#dataTables-form').dataTable();
        $("#DataLancamento").mask("99/99/9999");
        $("#ValorLancamento").maskMoney({prefix:'R$ ', thousands:'.',decimal:','});

        $('#CodigoPlano').on('blur', function(){
            $('#PlanoContaDiv').empty();
            $('#PlanoCodDiv').empty();
            var url = '<?php echo base_url('/financeiro/lancamentoCaixa/PlanoConta/Plano')?>';
            var id = document.getElementById("CodigoPlano").value;
            $.ajax({
                type:'post',        //Definimos o método HTTP usado
                dataType: 'json',   //Definimos o tipo de retorno
                url: url,
                success: function(dados){
                    for(var i=0;dados.length>i;i++){
                        if (dados[i].PlanoContaID == id && dados[i].planocontaCheck == 1 ) {
                             $('#PlanoContaDiv').empty();
                                var codigo = dados[i].PlanoContaID;
                                var desc = dados[i].PlanoDescricao;
                                var cod = dados[i].PlanoCodContabil;
                                $('#PlanoCodDiv').append('<label for="PlanoConta">Código Contábil:</label><input type="text" id="PlanoConta" name="PlanoConta" value="'+cod+'" class="form-control" />');
                                $('#PlanoContaDiv').append('<label for="PlanoConta">Plano de Contas:</label><input type="text" id="PlanoConta" name="PlanoConta" value="'+desc+'" class="form-control" />');
                        }
                    }
                },
                error: function(){
                    alert("Erro");
                }
            });
        });

        $(function($){

            $("#Receitas").click(function(){
                $('#tabela').empty(); //Limpando a tabela
                $.ajax({
                    type:'post',        //Definimos o método HTTP usado
                    dataType: 'json',   //Definimos o tipo de retorno
                    url: '<?php echo base_url('/financeiro/lancamentoCaixa/PlanoConta/Receitas')?>',
                    success: function(dados){
                        for(var i=0;dados.length>i;i++){
                            if (dados[i].planocontaCheck == 0) {
                                $('#tabela').append('<tr class="table-black"><td class="text-center">'+dados[i].PlanoContaID+'</td><td>'+dados[i].PlanoCodContabil+'</td><td>'+dados[i].PlanoDescricao+'</td></tr>');
                            } else {
                               $('#tabela').append('<tr><td class="text-center" data-nome="'+dados[i].PlanoContaID+'"><a href="" id="BtnID" data-dismiss="modal">'+dados[i].PlanoContaID+'</a></td><td data-cod="'+dados[i].PlanoCodContabil+'">'+dados[i].PlanoCodContabil+'</td><td data-desc="'+dados[i].PlanoDescricao+'">'+dados[i].PlanoDescricao+'</td></tr>');
                            }
                        }
                    }
                });
            });

            $("#Despesas").click(function(){
                $('#tabela').empty(); //Limpando a tabela
                $.ajax({
                    type:'post',        //Definimos o método HTTP usado
                    dataType: 'json',   //Definimos o tipo de retorno
                    url: '<?php echo base_url('/financeiro/lancamentoCaixa/PlanoConta/Despesas')?>',
                    success: function(dados){
                        for(var i=0;dados.length>i;i++){
                            if (dados[i].planocontaCheck == 0) {
                                $('#tabela').append('<tr class="table-black"><td class="text-center">'+dados[i].PlanoContaID+'</td><td>'+dados[i].PlanoCodContabil+'</td><td>'+dados[i].PlanoDescricao+'</td></tr>');
                            } else {
                               $('#tabela').append('<tr><td class="text-center" data-nome="'+dados[i].PlanoContaID+'"><a href="" id="BtnID" data-dismiss="modal">'+dados[i].PlanoContaID+'</a></td><td data-cod="'+dados[i].PlanoCodContabil+'">'+dados[i].PlanoCodContabil+'</td><td data-desc="'+dados[i].PlanoDescricao+'">'+dados[i].PlanoDescricao+'</td></tr>');
                            }
                        }
                    }
                });
            });
              $("#Ativos").click(function(){
                $('#tabela').empty(); //Limpando a tabela
                $.ajax({
                    type:'post',        //Definimos o método HTTP usado
                    dataType: 'json',   //Definimos o tipo de retorno
                    url: '<?php echo base_url('/financeiro/lancamentoCaixa/PlanoConta/Ativos')?>',
                    success: function(dados){
                        for(var i=0;dados.length>i;i++){
                            if (dados[i].planocontaCheck == 0) {
                                $('#tabela').append('<tr class="table-black"><td class="text-center">'+dados[i].PlanoContaID+'</td><td>'+dados[i].PlanoCodContabil+'</td><td>'+dados[i].PlanoDescricao+'</td></tr>');
                            } else {
                               $('#tabela').append('<tr><td class="text-center" data-nome="'+dados[i].PlanoContaID+'"><a href="" id="BtnID" data-dismiss="modal">'+dados[i].PlanoContaID+'</a></td><td data-cod="'+dados[i].PlanoCodContabil+'">'+dados[i].PlanoCodContabil+'</td><td data-desc="'+dados[i].PlanoDescricao+'">'+dados[i].PlanoDescricao+'</td></tr>');
                            }
                        }
                    }
                });
            });
            $("#Passivos").click(function(){
            $('#tabela').empty(); //Limpando a tabela
                $.ajax({
                    type:'post',        //Definimos o método HTTP usado
                    dataType: 'json',   //Definimos o tipo de retorno
                    url: '<?php echo base_url('/financeiro/lancamentoCaixa/PlanoConta/Passivos')?>',
                    success: function(dados){
                        for(var i=0;dados.length>i;i++){
                            if (dados[i].planocontaCheck == 0) {
                                $('#tabela').append('<tr class="table-black"><td class="text-center">'+dados[i].PlanoContaID+'</td><td>'+dados[i].PlanoCodContabil+'</td><td>'+dados[i].PlanoDescricao+'</td></tr>');
                            } else {
                                $('#tabela').append('<tr><td class="text-center" data-nome="'+dados[i].PlanoContaID+'"><a href="" id="BtnID" data-dismiss="modal">'+dados[i].PlanoContaID+'</a></td><td data-cod="'+dados[i].PlanoCodContabil+'">'+dados[i].PlanoCodContabil+'</td><td data-desc="'+dados[i].PlanoDescricao+'">'+dados[i].PlanoDescricao+'</td></tr>');
                            }
                        }
                    }
                });
            });

            $(document).on('click','#BtnID', function(e){
                e.preventDefault;
                $('#CodigoID').empty();
                $('#PlanoCodDiv').empty();
                $('#PlanoContaDiv').empty();
                var codigo = $(this).closest('tr').find('td[data-nome]').data('nome');
                var desc = $(this).closest('tr').find('td[data-desc]').data('desc');
                var cod = $(this).closest('tr').find('td[data-cod]').data('cod');
                
                $('#CodigoID').append('<label for="PlanoConta">Cod:</label><input type="text" id="PlanoConta" name="PlanoConta" value="'+codigo+'" class="form-control" />');
                $('#PlanoCodDiv').append('<label for="PlanoConta">Código Contábil:</label><input type="text" id="PlanoConta" name="PlanoConta" value="'+cod+'" class="form-control" />');
                $('#PlanoContaDiv').append('<label for="PlanoConta">Plano de Contas:</label><input type="text" id="PlanoConta" name="PlanoConta" value="'+desc+'" class="form-control" />');
            });
        });

        new SendForm({frm: $('#lancamentoCaixa'), btn:$('#btnSalvar')});
    });

</script>

