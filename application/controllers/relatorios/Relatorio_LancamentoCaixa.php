<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Relatorio_LancamentoCaixa extends My_Controller {
	
    public function __constructor(){
        parent::__constructor();
    }

	public function index(){

        $this->load->model('ContaPagar_model');
        $this->load->model('lancamento_caixa_model');

        $data                         = array();
        $data['BLC_CONTAPAGAR']       = array();
        $data['BLC_VALOR']            = array();
        $data['BLC_VALOR_TOTAL']      = array();
        $data['BLC_MES_ATIVO']        = array();
        $data['BLC_SEM_MES_ATIVO']    = array();

        $Lancamentos    = $this->lancamento_caixa_model->get();
        $ValorT = 0;

        if ($Lancamentos) {
            foreach ($Lancamentos as $r) {
                $Valor         = $r->ValorLancamento;
                $date          = $r->DataLancamento;
                $Movimento     = $r->Movimento;

                if($Movimento == 1){
                    $Movimento = "Entrada";
                }elseif ($Movimento == 2){
                    $Movimento = "Saída";
                }

                $ValorCaixa       = "R$ " .number_format($Valor,2, ",",".");

                $DataLancamento = date('d/m/y', strtotime($date));

                $data['BLC_VALOR'] [] = array(
                    "COD"               => $r->LancamentoID,
                    "MOVIMENTO"         => $Movimento,
                    "DATA"              => $DataLancamento,
                    "LOTACAO"           => $r->IgrejaLotacao,
                    "PLANOCONTA"        => $r->PlanoDescricao,
                    "HISTORICO"         => $r->Historico,
                    "VALOR"             => $ValorCaixa
                );

                $ValorT = $ValorT + $Valor;
                
        }

        $ValorTotal   = "R$ " .number_format($ValorT,2, ",",".");

            $data['BLC_VALOR_TOTAL'] [] = array(
               
                "VALOR_TOTAL"    => $ValorTotal
                );

        }

        $this->layout = 'dashboard';
		$this->parser->parse('relatorios/Relatorio_lancamentoCaixa_form',$data);
	
	
	}
	public function RelatorioPdf(){

		$data = array();

		$dataPdf = date("dmyhis");

        $Lotacao = "Sede";

		// $html - aqui escrevo todo o conteúdo do PDF

		$html = 

		"<html>
		<head>
        <link href=\"../assets/css/bootstrap.css\" rel=\"stylesheet\" />
        <link href=\"../assets/css/custom.css\" rel=\"stylesheet\" />
        <style>
          *, body{
            background-color: #fff !important;
          }
          b{
            font-size: 16px;
          }
          h3 {
            font-size: 22px;
          }
          h5 {
            font-size: 12px;
          }
          .col-md-12{
            width: 100%;
          }
          .img-cabecalho{
            margin-top: -40px;
            margin-left: -10px;
            width: 100px;
            height: 100px;
          }
          .text-center{
            text-align: center;
          }
          .titulo-geral{
            margin-top: -60px;
          }
          .titulo{
            padding-top: -19px;
          }
          .titulo1{
            padding-top: -25px;
          }
          .text{
            margin-left: 60px;
            margin-top: -20px;
          }
          .panel {
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
          }
          .panel-body {
            padding: 15px;
          }
          .panel-heading {
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-color: #428bca 1px solid !important;
          }
          .panel-primary{
            color: #fff;
            background-color: #428bca !important;
            border-color: #428bca 1px solid !important;
          }
          .table-panel{
            color: #fff;
            background-color: #428bca !important;

          }
        </style>
		</head>
		<body>
		<div class=\"col-md-12\">
			<div class=\"col-md-3\">
				<img src=\"../assets/img/logo.png\" class=\"img img-responsive img-cabecalho\">
			</div>
			<div class=\"col-md-9 text\">
				<h3 class=\"text-center titulo-geral\">Igreja Evangélica Assembéia de Deus em Queluz</h3>
				<h3 class=\"text-center titulo\">Ministério do Belém</h3>
                <h3 class=\"text-center titulo\"><b>CNPJ: 0000000-00</b></h3>
                <h5 class=\"text-center \">Rua Fança de Paula Alto São Geraldo Queluz-SP, CEP: 0000000</h5>
                <h5 class=\"text-center titulo1\">Telefone(12)99999-9999 E-mail: ieadeq.belem@ieadeq.com.br</h5>
			</div>
			<div class=\"col-md-12 text\">
				<h2 class=\"text-center\">Relatório de Lançamento de Caixa</h2>
			</div>
		</div>
            <div class=\"col-md-12\">
              <table class=\"table table-striped table-bordered\">
                <thead>
                    <tr>
                        <th bgclor=\"#428bca\">Lotação</th>
                        <th bgclor=\"#428bca\">Valor Entrada</th>
                        <th bgclor=\"#428bca\">Valor Saida</th>
                        <th bgclor=\"#428bca\">Valor Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>".$Lotacao."</td>
                        <td>".$Lotacao."</td>
                        <td>".$Lotacao."</td>
                        <td>".$Lotacao."</td>
                    </tr>
                </tbody>
              </table>
            </div>
        </div>
    </div>
  </div>
</div>
		</body>
		</html>";

		$pdfFilePath = "LançamentodeCaixa_".$dataPdf.".pdf";

		$this->load->library('M_pdf');

		$this->m_pdf->pdf->WriteHTML($html);

		$this->m_pdf->pdf->Output($pdfFilePath, "D");
	}
}