<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Departamento extends My_controller {
	
    public function __constructor(){
        parent::__constructor();
        
        $this->load->model('departamento_model');
    }

	public function index(){

		 $this->load->model('departamento_model');
		
		$data							= array();
		$data ['DepartamentoID']		= '';
		$data ['DepartamentoNome'] 		= '';
		$data ['DepartamentoLider'] 	= '';
		$data ['DepartamentoVice'] 		= '';
		$data ['DepartamentoSigla'] 	= '';
		$data ['BLC_DADOS']				= array();
		$data ['BLC_SEMDADOS']			= array();
		$data ['BLC_MENSAGEM']			= array();

		$pagina							= $this->input->get('pagina');

		if (!$pagina){
			$pagina = 0;
		} else {
			$pagina = ($pagina-1) *30;
		}

		$res						= $this->departamento_model->get (array(), FALSE, $pagina);

		

		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->DepartamentoID,
				"NOME"			=> $r->DepartamentoNome,
				"SIGLA"			=> $r->DepartamentoSigla,
				"LIDER"			=> $r->DepartamentoLider,
				"VICE"			=> $r->DepartamentoVice,
				"URLEDITAR"		=> site_url ('secretaria/Departamento/editar/'.$r->DepartamentoID),
				"URLEXCLUIR"	=> site_url ('secretaria/Departamento/excluir/'.$r->DepartamentoID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}
		
		
		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->load->view('secretaria/cadastro_form');
		$this->parser->parse('secretaria/departamento_form', $data);
	}

	public function salvar(){

		$this->load->model('departamento_model');

		$DepartamentoID				= $this->input->post ('DepartamentoID');
		$DepartamentoNome 			= $this->input->post ('DepartamentoNome');
		$DepartamentoSigla 			= $this->input->post ('DepartamentoSigla');
		$DepartamentoLider			= $this->input->post ('DepartamentoLider');
		$DepartamentoVice			= $this->input->post ('DepartamentoVice');

		$erros 			= FALSE;
		$mensagem 		= null;

		if (!$DepartamentoNome) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o nome do Departamento';
		}

		if (!$erros) {

			$itens = array(	

				"DepartamentoNome" 			=> $DepartamentoNome,
				"DepartamentoSigla"			=> $DepartamentoSigla,
				"DepartamentoLider"			=> $DepartamentoLider,
				"DepartamentoVice"			=> $DepartamentoVice

				);

			if ($DepartamentoID){
				$this->departamento_model->update($itens, $DepartamentoID);
			} else {
				$this->departamento_model->post($itens);
			}
			if ($DepartamentoID){
				$this->session->set_flashdata('Sucesso', 'Dados Inseridos com sucesso');
				redirect('secretaria/Departamento', 'refresh');

			} else {
				$this->session->set_flashdata('erro', 'Ocorreu um erro ao realizar a inserção');
				
			if ($DepartamentoID){
					redirect('secretaria/Departamento/editar/'.$AdmissaoID);
				} else {
					redirect('secretaria/Departamento', 'refresh');
				}
			}
		} else {
			$this->session->set_flashdata('erro', nl2br($mensagem));

			if ($DepartamentoID){
					redirect('Departamento/editar/'.$situacaoID);
				} else {
					redirect('Departamento/adicionar/adicionar');
				}
		}
	}

	private function setURL (&$data){

		$data ['ACAOFORM'] 	= base_url ('secretaria/Departamento/salvar');
		
	}

	public function excluir ($DepartamentoID) {
		$this->load->model('departamento_model');

		$res 		=	$this->departamento_model->excluir($DepartamentoID);

		if ($res) {
			$this->session->set_flashdata('Sucesso', 'Departamento removido com sucesso');
		} else {
			$this->session->set_flashdata('erro', 'Departamento não pode ser removido');
		}

		redirect('secretaria/Admissao', 'refresh');

	}

	public function editar($DepartamentoID) {

		$this->load->model('departamento_model');

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

		$res						= $this->departamento_model->get (array(), FALSE, $pagina);

		
		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->DepartamentoID,
				"NOME"			=> $r->DepartamentoNome,
				"SIGLA"			=> $r->DepartamentoSigla,
				"LIDER"			=> $r->DepartamentoLider,
				"VICE"			=> $r->DepartamentoVice,
				"URLEDITAR"		=> site_url ('secretaria/Departamento/editar/'.$r->DepartamentoID),
				"URLEXCLUIR"	=> site_url ('secretaria/Departamento/excluir/'.$r->DepartamentoID)
				
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}


		$edit 		=	$this->departamento_model->get(array ("DepartamentoID" => $DepartamentoID), FALSE);
		
		if ($edit) {

			foreach($edit as $item)	{

			$data['DepartamentoID'] = $item->DepartamentoID;			
			$data['DepartamentoNome'] = $item->DepartamentoNome;
			$data['DepartamentoSigla'] = $item->DepartamentoSigla;
			$data['DepartamentoLider'] = $item->DepartamentoLider;
			$data['DepartamentoVice'] = $item->DepartamentoVice;
			

			}		

		} else {
				show_error ('Não foram encontrados os dados');
			}

		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('secretaria/departamento_form', $data);

	}

}