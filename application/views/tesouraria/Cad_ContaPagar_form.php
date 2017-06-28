<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
        	<div class="col-md-12">
        		<div class="col-md-1">
        			<img src="<?php echo base_url('assets/img/icones/57m.png')?>" style="padding-left: 30px;">
        		</div>
        		<div class="col-md-10">
        			<h2 style="padding-left: 40px;">CONTAS A PAGAR</h2>
        		</div>
            </div>
        </div> 
        <hr />
    	<div class="row">
    		<div class="col-md-12">
    			<div class="panel-body">
    				<div class="row">
    					<form action="" method="post" role="form" id="CadFormConta">
    						<div class="col-md-12">
    							<div class="col-md-2">
    								<div class="form-group"> 
                        				<label for="codigoID">Código:</label>
                        				<input type="text" id="codigoID" name="codigoID" value="{codigoID}" class="form-control" />
                        			</div>
    							</div>
                                <div class="col-md-5">
                                    <div class="form-group"> 
                                        <label for="Lotacao">Lotação: <span class="alert alert-campo">Campo Obrigatório</span></label>
                                        <select name="Lotacao" id="Lotacao" class="form-control">
                                            <option value="">Selecione...</option>
                                            {BLC_LOTACAO}
                                            <option value="{ID}">{NOME}</option>
                                            {/BLC_LOTACAO}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group"> 
                                        <label for="Fornecedor">Fornecedor: &nbsp <a href="<?php echo base_url('tesouraria/Fornecedor')?>"><i class=" fa fa-edit "></i></a><span class="alert alert-campo">Campo Obrigatório</span></label>
                                        <select name="Fornecedor" id="Fornecedor" class="form-control">
                                            <option value="">Selecione...</option>
                                            {BLC_FORNECEDOR}
                                            <option value="{ID}">{NOME}</option>
                                            {/BLC_FORNECEDOR}
                                        </select>
                                    </div>
                                </div>
    						</div>
                            <div class="col-md-12">
                                 <div class="col-md-4">
                                    <div class="form-group"> 
                                        <label for="PlanoConta">Plano de Contas: <span class="alert alert-campo">Campo Obrigatório</span></label>
                                        <select name="PlanoConta" id="PlanoConta" class="form-control">
                                            <option value="">Selecione...</option>
                                            {BLC_PLANOCONTA}
                                            <option value="{ID}">{COD}-&nbsp{NOME}</option>
                                            {/BLC_PLANOCONTA}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group"> 
                                        <label for="TipoConta">Tipo de Conta: <span class="alert-campo">Campo Obrigatório</span></label>
                                        <select name="TipoConta" id="TipoConta" class="form-control">
                                            <option value="">Selecione...</option>
                                            {BLC_TIPOCONTA}
                                            <option value="{ID}">{NOME}</option>
                                            {/BLC_TIPOCONTA}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group"> 
                                        <label for="NumDocumento">Nº da Conta:</label>
                                        <input type="text" id="NumDocumento" name="NumDocumento" value="{NumDocumento}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group"> 
                                        <label for="Parcela">Parcela:</label>
                                        <input type="text" id="Parcela" name="Parcela" value="{Parcela}" class="form-control" />
                                    </div>
                                </div>
                                 <div class="col-md-1">
                                    <div class="form-group"> 
                                       <h3>De</h3>
                                    </div>
                                </div>
                                 <div class="col-md-1">
                                    <div class="form-group"> 
                                        <label for="TotalParcelas">Parcelas:</label>
                                        <input type="text" id="TotalParcelas" name="TotalParcelas" value="{TotalParcelas}" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-2">
                                    <div class="form-group"> 
                                        <label for="DataConta">Data da Conta:</label>
                                        <input type="text" id="DataConta" name="DataConta" value="{DataConta}" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group"> 
                                        <label for="DataVencimento">Vencimento:</label>
                                        <input type="text" id="DataVencimento" name="DataVencimento" value="{DataVencimento}" class="form-control" />
                                        <span class="alert-campo">Campo Obrigatório</span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group"> 
                                        <label for="ValorConta">Valor:</label>
                                        <input type="text" id="ValorConta" name="ValorConta" value="{ValorConta}" class="form-control" />
                                        <span class="alert-campo">Campo Obrigatório</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> 
                                        <label for="DescricaoConta">Descrição:</label>
                                        <input type="text" id="DescricaoConta" name="DescricaoConta" value="{DescricaoConta}" class="form-control" />
                                    </div>
                                </div>
                            </div>
    							<div class="col-md-12"><br>
    								<div style="text-align: right; padding-right: 30px;">
                                        
                                        <input type="button" value="Salvar" id="btnSalvar" onclick="submitsalvar()" class="btn btn-success">


                                        <!--<button type="submit" id="btnSalvar" class="btn btn-success"><i class="fa fa-edit "></i> Salvar</button>
    									<button type="button" id="btnExcluir" class="btn btn-success"><i class="fa fa-edit "></i> Excluir</button>
                                        <a href="{URLEXCLUIR}" class="btn btn-danger"><i class="fa fa-edit "></i> Excluir</a>
    									<a href="{URLCANCELAR}" class="btn btn-warning"><i class="fa fa-edit "></i> Cancelar</a>-->
    								</div>
    							</div>
    					</form>
    				</div>
    			</div>
    			<hr />
    			 <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Relação de Contas à Pagar
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-form">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="text-center">Código</th>
                                                <th class="text-center">Lotação</th>
                                                <th class="text-center">Plano de Contas</th>
                                                <th class="text-center">Tipo Conta</th>
                                                <th class="text-center">Vencimeto</th>
                                                <th class="text-center">Valor</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {BLC_DADOS}
                                            <tr class="odd gradeX">
                                                <td class="text-center" style="width: 8px;"><a href="{URLEDITAR}">{ID}</a></td>
                                                <td style="width: 100px;">{LOTACAO}</td>
                                                <td style="width: 150px;">{PLANOCONTA}</td>
                                                <td style="width: 100px;">{TIPOCONTA}</td>
                                                <td style="width: 80px;">{DATAVENC}</td>
                                                <td class="text-center" style="width: 80px;">{VALOR}</td>
                                                <td class="text-center" style="width: 8px;"><a href="{URLEXCLUIR}" class="btn btn-danger btn-xs text-center"><i class="fa fa-edit "></i></a></td>
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

<div id="Modais">
    
</div>

<script>

    $(document).ready(function () {

        $('#dataTables-form').dataTable();
        new SendForm({frm: $('#CadFormConta'), btn:$('#btnSalvar')});

        
        $("#DataConta").mask("99/99/9999");
        $("#DataVencimento").mask("99/99/9999");
        $("#ValorConta").maskMoney({prefix:'R$ ', thousands:'.',decimal:','});

          

     });

    function submitsalvar(){
            $.ajax({
                url: '{ACAOFORM}',
                type: 'post',
                dataType: 'json',
                data: $('#CadFormConta').serialize(),
                success: function(data) {
                    console.log(data);
                    //location.reload();
                },
                error: function(data) {
                    alert ("Erro Falha");
                }
            });
            return false;
        }

</script>