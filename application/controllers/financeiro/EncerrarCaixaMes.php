<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class EncerrarCaixaMes extends My_controller {
	
    public function __constructor(){
        parent::__constructor();

    }

	public function index(){


		$this->load->model('Ativa_model');
		
		$data							= array();
		$data ['AtivaMes']				= '';
		$data ['AtivaDataInicial'] 		= '';
		$data ['AtivaDataFim'] 			= '';
		$data ['AtivaValor'] 			= '';

		$this->setURL ($data);
		$this->layout = 'dashboard';
		$this->parser->parse('modals/EncerrarCaixaMes_form', $data);
	}

	public function salvar(){

		$this->load->library('JSON');
		$this->load->model('Ativa_model');

		$data 		= array();

		$Ativa = "CaixaAtivo";

		$CaixaAtivo = $this->AtivaCaixa($Ativa);

		if($CaixaAtivo == "CaixaDesativado") {

			$data ['condicao'] = "CaixaAtivado";
			echo json_encode($data);

		} else{

			$AtivaMes			= $this->input->post ('AtivaMes');
		$AtivaDataInicial 	= $this->input->post ('AtivaDataInicial');
		$AtivaDataFim		= $this->input->post ('AtivaDataFim');
		$AtivaValor			= $this->input->post ('AtivaValor');

		$erros 			= FALSE;
		$mensagem 		= null;

		if (!$AtivaMes) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Mês do Caixa';
		}
		if (!$AtivaDataInicial) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe a Data Inicial do Caixa';
		}
		if (!$AtivaDataFim) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe a Data Final do Caixa';
		}
		if (!$AtivaValor) {
			$erros		= TRUE;
			$mensagem 	.= 'Nescessário Informar um Valor do Caixa';
		}

		if (!$erros) {

			if ($AtivaDataInicial){
            $dConta = DateTime::createFromFormat( 'd/m/Y', $AtivaDataInicial );
            $DataInicialDb = $dConta->format('y-m-d');
        	} else {
		    $DataInicialDb = "";
        	}
        	if ($AtivaDataFim){
            $dConta = DateTime::createFromFormat( 'd/m/Y', $AtivaDataFim );
            $DataFimDb = $dConta->format('y-m-d');
        	} else {
		    $DataFimDb = "";
        	}
			if ($AtivaValor){
				$valor = explode('R$', $AtivaValor);
            	$ValorEx = $valor[1];
            	$AtivaValorDB = preg_replace('/[^0-9]/', '', $ValorEx) / 100;
			} else {
				$AtivaValorDB = "";
			}

			$Ativa = $this->Ativa_model->get();

			if (!$Ativa){
				$data['CONDICAO'] = "CaixaAtivado";
			}
			else {
				echo "não";
				die();
			}

			if ($Ativa) {
				foreach ($Ativa as $key) {
					$AtivadoID			= $key->AtivaCaixaID;
					$AtivaoMes 			= $key->CaixaMes;
					$AtivadoCaixa 		= $key->CaixaAtivo;
				}
			}

			$itens = array(	

				"CaixaMes" 			=> $AdmissaoNome,
				"DataInicial" 			=> $AdmissaoNome,
				"DataFim" 			=> $AdmissaoNome,
				"CaixaValor" 			=> $AdmissaoNome,
				"CaixaAtivo" 			=> $AdmissaoNome,

				);

			if ($AdmissaoID){
				$this->Ativa_model->update($itens, $AdmissaoID);
			} else {
				$this->Ativa_model->post($itens);
			}
			if ($AdmissaoID){
				$this->session->set_flashdata('Sucesso', 'Dados Inseridos com sucesso');
				redirect('secretaria/Admissao', 'refresh');

			} else {
				$this->session->set_flashdata('erro', 'Ocorreu um erro ao realizar a inserção');
				echo $mensagem;
			if ($AdmissaoID){
					redirect('secretaria/Admissao/editar/'.$AdmissaoID);
				} else {
					redirect('secretaria/Admissao', 'refresh');
				}
			}
		} else {
			$this->session->set_flashdata('erro', nl2br($mensagem));

			if ($situacaoID){
					redirect('situacao/editar/'.$situacaoID);
				} else {
					redirect('situacao/adicionar/adicionar');
				}
		}

		}


		
	}

	private function setURL (&$data){

		$data ['ACAOFORM'] 	= base_url ('financeiro/AtivaMesCaixa/salvar');
		
	}

	public function excluir ($AdmissaoID) {
		$this->load->model('admissao_model');

		$res 		=	$this->admissao_model->excluir($AdmissaoID);

		if ($res) {
			$this->session->set_flashdata('Sucesso', 'Usuário removido com sucesso');
		} else {
			$this->session->set_flashdata('erro', 'Usuário não pode ser removido');
		}

		redirect('secretaria/Admissao', 'refresh');

	}

	public function editar($AdmissaoID) {

		$this->load->model('admissao_model');

		$data						= array();
		$data ['ACAO']				= 'Edição';
		$data ['BLC_DADOS']			= array();
		$data ['BLC_SEMDADOS']		= array();

		$pagina						= $this->input->get('pagina');

		if (!$pagina){
			$pagina = 0;
		} else {
			$pagina = ($pagina-1) *30;
		}

		$res						= $this->admissao_model->get (array(), FALSE, $pagina);

		
		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->AdmissaoID,
				"NOME"			=> $r->AdmissaoDescricao,
				"URLEDITAR"		=> site_url ('secretaria/Admissao/editar/'.$r->AdmissaoID),
				"URLEXCLUIR"	=> site_url ('secretaria/Admissao/excluir/'.$r->AdmissaoID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}


		$edit 		=	$this->admissao_model->get(array ("AdmissaoID" => $AdmissaoID), FALSE);
		
		if ($edit) {

			foreach($edit as $item)	{

			$data['AdmissaoID'] = $item->AdmissaoID;			
			$data['AdmissaoNome'] = $item->AdmissaoDescricao;
			

			}		

		} else {
				show_error ('Não foram encontrados os dados');
			}

		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('secretaria/admissao_form', $data);

	}

}