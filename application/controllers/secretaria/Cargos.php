<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cargos extends My_controller {
	
    public function __constructor(){
        parent::__constructor();
        
        $this->load->model('cargo_model');
    }

	public function index(){

		 $this->load->model('cargo_model');
		
		$data						= array();
		$data ['cargoid']			= '';
		$data ['cargonome'] 		= '';
		$data ['BLC_DADOS']			= array();
		$data ['BLC_SEMDADOS']		= array();
		
		$pagina						= $this->input->get('pagina');

		if (!$pagina){
			$pagina = 0;
		} else {
			$pagina = ($pagina-1) *30;
		}

		$res						= $this->cargo_model->get (array(), FALSE, $pagina);

		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->CargoID,
				"NOME"			=> $r->CargoNome,
				"URLEDITAR"		=> site_url ('secretaria/cargos/editar/'.$r->CargoID),
				"URLEXCLUIR"	=> site_url ('secretaria/cargos/excluir/'.$r->CargoID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}

		
		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->load->view('secretaria/cadastro_form');
		$this->parser->parse('secretaria/cargos', $data);
	}

	public function salvar(){

		$this->load->model('cargo_model');

		$cargoid			= $this->input->post ('cargoid');
		$cargonome 			= $this->input->post ('cargonome');

		$erros 			= FALSE;
		$mensagem 		= null;

		if (!$cargonome) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Setor do Usuário';
		}

		if (!$erros) {

			$itens = array(	

				"CargoNome" 			=> $cargonome,

				);

			if ($cargoid){
				$this->cargo_model->update($itens, $cargoid);
			} else {
				$this->cargo_model->post($itens);
			}
			if ($cargoid){
				$this->session->set_flashdata('Sucesso', 'Dados Inseridos com sucesso');
				redirect('secretaria/cargos', 'refresh');

			} else {
				$this->session->set_flashdata('erro', 'Ocorreu um erro ao realizar a inserção');

				if ($cargoid){
					redirect('cargos/editar/'.$cargoid);
				} else {
					redirect('secretaria/cargos', 'refresh');
				}
			}
		} else {
			$this->session->set_flashdata('erro', nl2br($mensagem));

			if ($cargoid){
					redirect('cargos/editar/'.$cargoid);
				} else {
					redirect('cargos/adicionar/adicionar');
				}
		}
	}

	private function setURL (&$data){

		$data ['ACAOFORM'] 	= base_url ('secretaria/cargos/salvar');
		$data ['BTN_SAIR']  = base_url ('secretaria/cadastros');
		
	}

	public function excluir ($CargoID) {
		$this->load->model('cargo_model');

		$res 		=	$this->cargo_model->excluir($CargoID);

		if ($res) {
			$this->session->set_flashdata('Sucesso', 'Cargo removido com sucesso');
		} else {
			$this->session->set_flashdata('erro', 'Cargo não pode ser removido');
		}

		redirect('secretaria/cargos','refresh');

	}

	public function editar($CargoID) {

		$this->load->model('cargo_model');

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

		$res						= $this->cargo_model->get (array(), FALSE, $pagina);

		
		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->CargoID,
				"NOME"			=> $r->CargoNome,
				"URLEDITAR"		=> site_url ('secretaria/cargos/editar/'.$r->CargoID),
				"URLEXCLUIR"	=> site_url ('secretaria/cargos/excluir/'.$r->CargoID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}


		$edit 		=	$this->cargo_model->get(array ("CargoID" => $CargoID), FALSE);
		
		if ($edit) {

			foreach($edit as $item)	{

			$data['cargoid'] 		= $item->CargoID;			
			$data['cargonome'] 		= $item->CargoNome;
			

			}		

		} else {
				show_error ('Não foram encontrados os dados');
			}

		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('secretaria/cargos', $data);

	}
}