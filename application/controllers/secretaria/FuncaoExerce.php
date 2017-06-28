<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class funcaoExerce extends My_controller {
	
    public function __constructor(){
        parent::__constructor();
        
        $this->load->model('Funcao_model');
    }

	public function index(){

		 $this->load->model('Funcao_model');
		
		$data						= array();
		$data ['inputID']			= '';
		$data ['inputNome'] 		= '';
		$data ['BLC_DADOS']			= array();
		$data ['BLC_SEMDADOS']		= array();
		$data ['ACAO']				='';

		$pagina						= $this->input->get('pagina');

		if (!$pagina){
			$pagina = 0;
		} else {
			$pagina = ($pagina-1) *30;
		}

		$res						= $this->Funcao_model->get (array(), FALSE, $pagina);

		
		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->FuncaoExerceID,
				"NOME"			=> $r->FuncaoExerceNome,
				"URLEDITAR"		=> site_url ('secretaria/funcaoExerce/editar/'.$r->FuncaoExerceID),
				"URLEXCLUIR"	=> site_url ('secretaria/funcaoExerce/excluir/'.$r->FuncaoExerceID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}

		
		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->load->view('secretaria/cadastro_form');
		$this->parser->parse('secretaria/FuncaoExerce_form', $data);
	}

	public function salvar(){

		$this->load->model('Funcao_model');

		$inputID			= $this->input->post ('inputID');
		$inputNome 			= $this->input->post ('inputNome');

		$erros 			= FALSE;
		$mensagem 		= null;
		if (!$inputNome) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Setor do Usuário';
		}

		if (!$erros) {

			$itens = array(	

				"FuncaoExerceNome" 			=> $inputNome,

				);

			if ($inputID){
				$this->Funcao_model->update($itens, $inputID);
			} else {
				$this->Funcao_model->post($itens);
			}
			if ($inputID){
				$this->session->set_flashdata('Sucesso', 'Dados Inseridos com sucesso');
				redirect('secretaria/funcaoExerce', 'refresh');

			} else {
				$this->session->set_flashdata('erro', 'Ocorreu um erro ao realizar a inserção');

				if ($inputID){
					redirect('cargos/editar/'.$inputID);
				} else {
					redirect('secretaria/funcaoExerce', 'refresh');
				}
			}
		} else {
			$this->session->set_flashdata('erro', nl2br($mensagem));

			if ($inputID){
					redirect('cargos/editar/'.$inputID);
				} else {
					redirect('cargos/adicionar/adicionar');
				}
		}
	}

	private function setURL (&$data){

		$data ['ACAOFORM'] 	= base_url ('secretaria/funcaoExerce/salvar');
		$data ['CANCELAR']	= base_url ('secretaria/funcaoExerce');
		
	}

	public function excluir ($FuncaoExerceID) {
		$this->load->model('Funcao_model');

		$res 		=	$this->Funcao_model->excluir($FuncaoExerceID);

		if ($res) {
			$this->session->set_flashdata('Sucesso', 'Função removida com sucesso');
		} else {
			$this->session->set_flashdata('erro', 'Função não pode ser removida');
		}

		redirect('secretaria/funcaoExerce','refresh');

	}

	public function editar($inputID) {

		$this->load->model('Funcao_model');

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

		$res						= $this->Funcao_model->get (array(), FALSE, $pagina);

		
		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->FuncaoExerceID,
				"NOME"			=> $r->FuncaoExerceNome,
				"URLEDITAR"		=> site_url ('secretaria/funcaoExerce/editar/'.$r->FuncaoExerceID),
				"URLEXCLUIR"	=> site_url ('secretaria/funcaoExerce/excluir/'.$r->FuncaoExerceID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}


		$edit 		=	$this->Funcao_model->get(array ("FuncaoExerceID" => $inputID), FALSE);
		
		if ($edit) {

			foreach($edit as $item)	{

			$data['inputNome'] = $item->FuncaoExerceNome;			
			$data['inputID'] = $item->FuncaoExerceID;
			

			}		

		} else {
				show_error ('Não foram encontrados os dados');
			}

		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('secretaria/FuncaoExerce_form', $data);

	}

}