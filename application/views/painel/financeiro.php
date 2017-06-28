<div id="page-wrapper" >
  <div id="page-inner">
   
    <div class="row">
      <!-- Bloco Inicial -->
      <div class=" col-xs-12 col-md-12 col-sm-12">
        <div class="panel panel-default panel-info">
          <div class="panel-heading text-center">
            Igreja Evangélica Assembléia de Deus Ministéiro do Belém Campo Queluz - SP - Início de Caixa
          </div>
          <div class="panel-body">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-SkyBlue">
                  <div class="">
                      <h3>{MES_ATIVO}</h3>
                  </div>
                  <div class="panel-footer back-footer-blue">
                      MÊS ATIVO DO CAIXA
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-SeaGreen">
                  <div class="">
                    <h3>{VALOR_CAIXA_INIT}</h3>
                  </div>
                  <div class="panel-footer back-footer-blue">
                      VALOR INICIAL DO CAIXA
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class=" col-xs-12 col-md-12 col-sm-12">
        <div class="panel panel-default panel-primary">
          <div class="panel-heading text-center">
            Resumo geral do Financeiro da Igreja Assembléia de Deus Campo de Queluz-SP do ano de 2017
          </div>
          <div class="panel-body">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-brown">
                  <div class="">
                      <h3>{VALOR_DIZIMOS}</h3>
                  </div>
                  <div class="panel-footer back-footer-blue">
                      TOTAL DE DÍZIMOS
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-green">
                  <div class="">
                    <h3>{VALOR_OFERTAS}</h3>
                  </div>
                  <div class="panel-footer back-footer-blue">
                      TOTAL DE OFERTAS
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                  <div class="">
                      <h3>{VALOR_ENTRADA}</h3>
                  </div>
                  <div class="panel-footer back-footer-blue">
                      TOTAL ENTRADA
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-sm-12">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-red">
                  <div class="">
                      <h3>{VALOR_SAIDA}</h3>
                  </div>
                  <div class="panel-footer back-footer-blue">
                      TOTAL DE SAÍDAS
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-orange">
                  <div class="">
                    <h3>{VALOR_CAIXA}</h3>
                  </div>
                  <div class="panel-footer back-footer-blue">
                      TOTAL EM CAIXA
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / Bloco Inicial 
      {/BLC_MES_ATIVO}
      {BLC_SEM_MES_ATIVO}
       <div class=" col-xs-12 col-md-12 col-sm-12">
        <div class="panel panel-default panel-info">
          <div class="panel-heading text-center">
            Igreja Evangélica Assembléia de Deus Ministéiro do Belém Campo Queluz - SP
          </div>
          <div class="panel-body">
            <h1>Não Existe Mês Ativo para o período - Nescessário ativar um mês para exibir o Caixa...</h1>
          </div>
        </div>
      </div>
      {/BLC_SEM_MES_ATIVO}-->

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading">
                    CONTAS À PAGAR
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Cod</th>
                            <th>Lotação</th>
                            <th>Plano de Contas</th>
                            <th>Vencimento</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                    {BLC_CONTAPAGAR}
                        <tr>
                            <td>{COD}</td>
                            <td>{LOTACAO}</td>
                            <td>{PLANOCONTA}</td>
                            <td>{VENCIMENTO}</td>
                            <td>{VALOR}</td>
                        </tr>
                    {/BLC_CONTAPAGAR}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
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
        <div class="col-md-6 col-sm-12 col-xs-12">                     
            <div class="panel panel-default">
                <div class="panel-heading">
                    Bar Chart Example
                </div>
                <div class="panel-body">
                    <div id="morris-bar-chart"></div>
                </div>
            </div>            
        </div>
    </div>
  </div>
</div>

<script>

    var funcao = "{TESTE}";

    if (funcao == "Ativar_Caixa") {
          
          AtivacaoCaixa();
    } 

    function AtivacaoCaixa() {
        swal({
            title: "Erro!!!",
            text: "Você Precisa Ativar o Mês de Competência do Caixa!!",
            type: "error",
            showCancelButton: true,
            confirmButtonClass: "btn-warning",
            confirmButtonText: "Ativar Caixa",
            closeOnConfirm: false
          },
          function(){
            window.location = "<?php echo base_url('/financeiro/AtivaMesCaixa')?>"
          });
    }

</script>