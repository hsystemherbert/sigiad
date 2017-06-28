<div id="page-wrapper" >
	<div id="page-inner">
		<div class="row cabecalho">
			<div class="col-xs-12 col-md-12">
				<div class="col-xs-2 col-md-2">
					<img src="<?php echo base_url('assets/img/logo.png')?>" alt="" class="img img-responsive img-cabecalho">
				</div>
				<div class="col-xs-9 col-md-10 titulo">
					<h3 class="text-center">Igreja Evangélica Assembéia de Deus em Queluz-SP Ministério do Belém</h3>
					<h4 class="text-center">Rua França de Paula - Alto Queluz - SP <b>CNPJ: </b>0000000-00</h4>
					<h4 class="text-center"><b>CNPJ: </b>0000000-00</h4>
				</div>
			</div>
			<div class="col-xs-10 col-md-12 panel-alert">
				<div class="alert alert-info">
					<h2 class="text-center">Relatório de Fornecedores</h2>
				</div>
			</div>
		</div><hr/><br>
        <div class="row pesquisa">
            <div class="col-md-4 col-md-offset-8">
                <div class="col-md-3 print-impressao">
                   <a href="<?php echo base_url('/relatorios/Relatorio_LancamentoCaixa/RelatorioPdf')?>" class="btn btn-info text-left">FICHA</a>
                </div>
                <div class="col-md-3">
                   <a href="" id="BtnPesquisa" class="text-center"><img src="<?php echo base_url('assets/img/icones/111.png')?>" alt="" class="img img-responsive img-rel text-right"></a>
                </div>
                <div class="col-md-3 text-left">
                   <a href="" id="BtnImprimir" class=""><img src="<?php echo base_url('assets/img/icones/110.png')?>" alt="" class="img img-responsive img-rel"></a>
                </div>
                <div class="col-md-3 text-left print-impressao">
                   <a href="<?php echo base_url('/relatorios/Relatorio_LancamentoCaixa/RelatorioPdf')?>" class="btn btn-info">PDF</a>
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
                   RELATÓRIO GERAL DE FORNECEDORES
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Razão</th>
                            <th>Nome Fantasia</th>
                            <th>Atividade</th>
                        </tr>
                    </thead>
                    <tbody>
                    {BLC_DADOS}
                        <tr>
                            <td>{ID}</td>
                            <td>{RAZAO}</td>
                            <td>{NOME}</td>
                            <td>{ATIVIDADE}</td>
                        </tr>
                    {/BLC_DADOS}
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
    $('#BtnImprimir').click(function(){
        window.print();
        return false;
    });

    });

</script>