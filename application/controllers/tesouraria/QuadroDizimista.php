<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class QuadroDizimista extends My_controller {
	
    public function __constructor(){
        parent::__constructor();
        
        $this->load->model('admissao_model');
    }

	public function index(){

		 $this->load->model('admissao_model');
		
		$data						= array();
		$data ['AdmissaoID']		= '';
		$data ['AdmissaoNome'] 		= '';
		$data ['BLC_DADOS']			= array();
		$data ['BLC_SEMDADOS']		= array();
		$data ['BLC_MENSAGEM']		= array();
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
				"URLEDITAR"		=> site_url ('secretaria/admissao/editar/'.$r->AdmissaoID),
				"URLEXCLUIR"	=> site_url ('secretaria/admissao/excluir/'.$r->AdmissaoID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}
		
		
		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('secretaria/admissao_form', $data);
	}

	public function salvar(){

		$this->load->model('admissao_model');

		$AdmissaoID			= $this->input->post ('AdmissaoID');
		$AdmissaoNome 			= $this->input->post ('AdmissaoNome');

		$erros 			= FALSE;
		$mensagem 		= null;

		if (!$AdmissaoNome) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe a Situação Cadastral';
		}

		if (!$erros) {

			$itens = array(	

				"AdmissaoDescricao" 			=> $AdmissaoNome,

				);

			if ($AdmissaoID){
				$this->admissao_model->update($itens, $AdmissaoID);
			} else {
				$this->admissao_model->post($itens);
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

	private function setURL (&$data){

		$data ['ACAOFORM'] 	= base_url ('secretaria/Admissao/salvar');
		
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