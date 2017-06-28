<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Relatorio_Fornecedores extends My_Controller {
	
    public function __constructor(){
        parent::__constructor();
    }

	public function index(){

        $this->load->model('Fornecedor_model');
    
    $data             = array();

    $data ['BLC_DADOS']       = array();

    $res            = $this->Fornecedor_model->get ();

    

    if ($res) {
      foreach ($res as $r) {
        $data ['BLC_DADOS'] []  = array(
        "ID"      => $r->FornecedorID,
        "RAZAO"     => $r->NomeRazao,
        "NOME"      => $r->NomeFantasia,
        "ATIVIDADE"   => $r->RamoAtividade
        );
      }
      
    } 

    $this->layout = 'dashboard';
    $this->parser->parse('relatorios/Relatorio_Fornecedores_form', $data);
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
