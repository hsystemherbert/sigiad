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
			<div class="col-xs-10 col-md-12">
				<div class="alert alert-info">
					<h2 class="text-center">Relatório de Lançamento de Caixa</h2>
				</div>
			</div>
		</div><hr/><br>
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
                            <th>Lotação</th>
                            <th>Valor Entrada</th>
                            <th>Valor Saida</th>
                            <th>Valor Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    {BLC_VALOR}
                        <tr>
                            <td>{LOTACAO}</td>
                            <td>{VALOR_ENTRADA}</td>
                            <td>{VALOR_SAIDA}</td>
                            <td>{VALOR_TOTAL}</td>
                        </tr>
                    {/BLC_VALOR}
                    {BLC_VALOR_TOTAL}
                        <tr class="table-back">
                            <td class="table-back"><b>Valor Total:</b></td>
                            <td class="table-back"><b>{VALOR_TE}</b></td>
                            <td class="table-back"><b>{VALOR_TS}</b></td>
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
</div>
	</div>
</div>