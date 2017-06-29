<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Planocontas extends My_controller {
	
    public function __constructor(){
        parent::__constructor();

    }

	public function index(){

		 $this->load->model('model_main');
		
		$data							= array();
		$data ['planocontaID']			= '';
		$data ['planocontaCod'] 		= '';
		$data ['planocontaDesc'] 		= '';
		$data ['planocontaCheck'] 		= '';


		$data ['BLC_NATUREZA']		= array();
		$data ['BLC_DADOS']			= array();
		$data ['BLC_SEMDADOS']		= array();

		
		$sql = "SELECT fpc1.DescricaoPlano AS PlanoDescricao, fpc1.PlanoID
		 FROM financeiro_plano_contas AS fpc1
		   LEFT JOIN financeiro_plano_contas AS fpc2 ON fpc2.PlanoContabilPai_ID = fpc1.PlanoID
		   LEFT JOIN financeiro_plano_contas AS fpc3 ON fpc3.PlanoContabilPai_ID = fpc2.PlanoID
		   LEFT JOIN financeiro_plano_contas AS fpc4 ON fpc4.PlanoContabilPai_ID = fpc3.PlanoID
		   LEFT JOIN financeiro_plano_contas AS fpc5 ON fpc5.PlanoContabilPai_ID = fpc4.PlanoID
		  where fpc1.PlanoContabilPai_ID is null
		  order by fpc1.PlanoID";

		$natureza = $this->model_main->get_query($sql);

		if($natureza){
			foreach ($natureza as $value) {
				$data['BLC_NATUREZA'][] = array(
					"ID" 		=> $value->PlanoID,
					"NATUREZA"	=> $value->PlanoDescricao
				);
			}
		}

		
		$res = $this->model_main->get($select = array(), $from= "financeiro_plano_contas", $condicao = array(), $primeiraLinha = FALSE, $pagina = 0);


		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->PlanoID,
				"COD"			=> $r->CodigoContabil,
				"NOME"			=> $r->DescricaoPlano,
				"CHECK"			=> $r->RecebeLancamento,
				"URLEDITAR"		=> site_url ('contabilidade/planocontas/editar/'.$r->PlanoID),
				"URLEXCLUIR"	=> site_url ('contabilidade/planocontas/excluir/'.$r->PlanoID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}
		
		
		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('contabilidade/planocontas_form', $data);
	}

	public function salvar(){

		$this->load->library('JSON');
		$this->load->model('planocontas_model');

		$PlanoContaID 			= $this->input->post ('planocontaID');
		$planocontaCod 			= $this->input->post ('planocontaCod');
		$planocontaDesc 		= $this->input->post ('planocontaDesc');
		$planocontaCheck 		= $this->input->post ('planocontaCheck');

		$erros 			= FALSE;
		$mensagem 		= null;

		if (!$planocontaCod) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Código Contábil!';
		}

		if (!$planocontaDesc) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe a Descrição Contábil!';
		}


		if (!$erros) {

			$itens = array(

			'PlanoCodContabil'		=> $planocontaCod,
			'PlanoDescricao'		=> $planocontaDesc,
			'planocontaCheck'		=> $planocontaCheck
			);

			if ($PlanoContaID){
				$this->planocontas_model->update($itens, $PlanoContaID);

                if ($PlanoContaID){
                    $data ['sucesso'] = array("Dados Atualizados com Sucesso no Plano de Contas");
                    $data ['redirect'] = base_url('contabilidade/planocontas');
                    echo json_encode($data);
                } else {
                    $data ['errors'] = array("Ocorreu um erro ao fazer a atualização dos dados");
                    echo json_encode($data);
                }
            } else {
                if ($this->planocontas_model->post($itens)) {
                    $data ['sucesso'] = array("Dados Inseridos com Sucesso no Plano de Contas");
                    $data ['redirect'] = base_url('contabilidade/planocontas');
                    echo json_encode($data);
                } else {
                    $data ['errors'] = array("Ocorreu um erro ao fazer a inserção dos dados");
                    echo json_encode($data);
                }
            }
		} else {
			$data ['errors'] = array("Ocorreu um erro ao fazer a inserção dos dados");
           	echo json_encode($data);
		}
	}

	private function setURL (&$data){

		$data ['ACAOFORM'] 	= base_url ('contabilidade/planocontas/salvar');
		
	}

	public function excluir ($PlanoContaID) {

		$this->load->library('JSON');
		$this->load->model('planocontas_model');

		$res 		=	$this->planocontas_model->excluir($PlanoContaID);

		if ($res) {
			
			$data ['success'] = array("Dados Excluidos com Sucesso no Plano de Contas");
           	echo json_encode($data);
            redirect('contabilidade/planocontas', 'refresh');

		} else {

			$data ['errors'] = array("Ocorreu um erro ao excluir os dados no Plano de Contas");
           	echo json_encode($data);
		}
	}

	public function editar($PlanoContaID) {

		$this->load->model('planocontas_model');

		$data						= array();
		$data ['BLC_DADOS']			= array();
		$data ['BLC_SEMDADOS']		= array();


		$pagina						= $this->input->get('pagina');

		if (!$pagina){
			$pagina = 0;
		} else {
			$pagina = ($pagina-1) *30;
		}

		$res				= $this->planocontas_model->get (array(), FALSE, $pagina);

		
		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->PlanoContaID,
				"COD"			=> $r->PlanoCodContabil,
				"NOME"			=> $r->PlanoDescricao,
				"CHECK"			=> $r->planocontaCheck,
				"URLEDITAR"		=> site_url ('contabilidade/planocontas/editar/'.$r->PlanoContaID),
				"URLEXCLUIR"	=> site_url ('contabilidade/planocontas/excluir/'.$r->PlanoContaID)
				);
			}
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}


		$edit 		=	$this->planocontas_model->get(array ("PlanoContaID" => $PlanoContaID), FALSE);


		if ($edit) {

			foreach($edit as $item)	{

				$data ['planocontaID']	    = $item->PlanoContaID;
				$data ['planocontaCod'] 	= $item->PlanoCodContabil;
				$data ['planocontaDesc'] 	= $item->PlanoDescricao;
			}

		} else {
				show_error ('Não foram encontrados os dados');
			}

		$this->setURL ($data);

		$this->layout = 'dashboard';
        $this->parser->parse('contabilidade/planocontas_form', $data);

	}

	public function selecaoPlanoConta($CodigoContabil){

		$data = "sucesso $CodigoContabil";

		echo json_encode($data);

	}

}