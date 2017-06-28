<div id="page-wrapper" >
	<div id="page-inner">
		<div class="row cabecalho">
			<div class="col-xs-12 col-md-12">
				<div class="col-xs-1 col-md-2">
					<img src="<?php echo base_url('assets/img/logo.png')?>" alt="" class="img img-responsive img-cabecalho">
				</div>
				<div class="col-xs-10 col-md-10 titulo">
					<h3 class="text-center">Igreja Evangélica Assembéia de Deus em Queluz-SP Ministério do Belém</h3>
					<h4 class="text-center">Rua França de Paula - Alto Queluz - SP <b>CNPJ: </b>0000000-00</h4>
					<h4 class="text-center"><b>CNPJ: </b>0000000-00</h4>
				</div>
			</div>
			<div class="col-xs-10 col-md-12 panel-alert">
				<div class="alert alert-info">
					<h2 class="text-center">Relatório de Lançamento de Caixa</h2>
				</div>
			</div>
		</div><hr/><br>
        <div class="row pesquisa">
            <div class="col-md-2 col-md-offset-10">
               <div class="col-md-6">
                   <a href="" id="BtnPesquisa"><img src="<?php echo base_url('assets/img/icones/111.png')?>" alt="" class="img img-responsive img-rel text-right"></a>
               </div>
               <div class="col-md-6 text-right">
                   <a href="<?php echo base_url('/relatorios/Relatorio_LancamentoCaixa/RelatorioPdf')?>"><img src="<?php echo base_url('assets/img/icones/110.png')?>" alt="" class="img img-responsive img-rel"></a>
               </div>
            </div>
        </div><br><br>
        <div class="row" id="pesquisaRel_lancamento">
            <div class="col-md-12">
                <h3>Pesquisa Avançada</h3>
            </div>
            <div class="col-md-12">
                <form action="" method="POST" id="Pesqui">
                    <div class="alert alert-warning">
                        <div class="col-md-3">
                            <div class="form-group"> 
                                <label for="AdmissaoNome">Lotação</label>
                                <input type="text" id="AdmissaoNome" name="AdmissaoNome" value="{AdmissaoNome}" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group"> 
                                <label for="AdmissaoNome">Plano de Conta</label>
                                <input type="text" id="AdmissaoNome" name="AdmissaoNome" value="{AdmissaoNome}" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group"> 
                                <label for="AdmissaoNome">Data</label>
                                <input type="text" id="AdmissaoNome" name="AdmissaoNome" value="{AdmissaoNome}" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group"> 
                                <label for="AdmissaoNome">Mês Ativo</label>
                                <input type="text" id="AdmissaoNome" name="AdmissaoNome" value="{AdmissaoNome}" class="form-control" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
		<div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                   SALDOS POR LOTAÇÃO
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Movimento</th>
                            <th>Data</th>
                            <th>Lotação</th>
                            <th>Plano Conta</th>
                            <th>Histótico</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                    {BLC_VALOR}
                        <tr>
                            <td>{COD}</td>
                            <td>{MOVIMENTO}</td>
                            <td>{DATA}</td>
                            <td>{LOTACAO}</td>
                            <td>{PLANOCONTA}</td>
                            <td>{HISTORICO}</td>
                            <td>{VALOR}</td>
                        </tr>
                    {/BLC_VALOR}
                    {BLC_VALOR_TOTAL}
                        <tr class="table-back">
                            <td class="table-back" colspan="6"><b>Valor Total:</b></td>
                            <td class="table-back"><b>{VALOR_TOTAL}</b></td>
                        </tr>
                    {/BLC_VALOR_TOTAL}
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
        </div>
	</div>
</div>

<script>
    $(document).ready(function(){

    
    $('#pesquisaRel_lancamento').hide("slow");

    $('#BtnPesquisa').click(function(event){
        if($('#pesquisaRel_lancamento').is(':visible')){
           $('#pesquisaRel_lancamento').hide("slow");
        } else {
          $('#pesquisaRel_lancamento').show("slow");  
        }
        event.preventDefault();
    });

    });

</script>