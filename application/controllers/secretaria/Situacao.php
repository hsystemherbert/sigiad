<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Situacao extends My_controller {
	
    public function __constructor(){
        parent::__constructor();
        
        $this->load->model('situacao_model');
    }

	public function index(){

		 $this->load->model('situacao_model');
		
		$data						= array();
		$data ['situacaoID']		= '';
		$data ['situacao'] 			= '';
		$data ['BLC_DADOS']			= array();
		$data ['BLC_SEMDADOS']		= array();
		$data ['BLC_MENSAGEM']		= array();
		$pagina						= $this->input->get('pagina');

		if (!$pagina){
			$pagina = 0;
		} else {
			$pagina = ($pagina-1) *30;
		}

		$res						= $this->situacao_model->get (array(), FALSE, $pagina);

		

		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->SituacaoID,
				"NOME"			=> $r->SituacaoDescricao,
				"URLEDITAR"		=> site_url ('secretaria/situacao/editar/'.$r->SituacaoID),
				"URLEXCLUIR"	=> site_url ('secretaria/situacao/excluir/'.$r->SituacaoID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}
		
		
		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->load->view('secretaria/cadastro_form');
		$this->parser->parse('secretaria/situacao', $data);
	}

	public function salvar(){

		$this->load->model('situacao_model');

		$situacaoID			= $this->input->post ('situacaoID');
		$situacao 			= $this->input->post ('situacao');

		$erros 			= FALSE;
		$mensagem 		= null;

		if (!$situacao) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe a Situação Cadastral';
		}

		if (!$erros) {

			$itens = array(	

				"situacaoDescricao" 			=> $situacao,

				);

			if ($situacaoID){
				$this->situacao_model->update($itens, $situacaoID);
			} else {
				$this->situacao_model->post($itens);
			}
			if ($situacaoID){
				$this->session->set_flashdata('Sucesso', 'Dados Inseridos com sucesso');
				redirect('secretaria/situacao', 'refresh');

			} else {
				$this->session->set_flashdata('erro', 'Ocorreu um erro ao realizar a inserção');
				echo $mensagem;
			if ($situacaoID){
					redirect('situacao/editar/'.$situacaoID);
				} else {
					redirect('secretaria/situacao', 'refresh');
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

		$data ['ACAOFORM'] 	= base_url ('secretaria/situacao/salvar');
		
	}

	public function excluir ($SituacaoID) {
		$this->load->model('situacao_model');

		$res 		=	$this->situacao_model->excluir($SituacaoID);

		if ($res) {
			$this->session->set_flashdata('Sucesso', 'Usuário removido com sucesso');
		} else {
			$this->session->set_flashdata('erro', 'Usuário não pode ser removido');
		}

		redirect('secretaria/situacao', 'refresh');

	}

	public function editar($SituacaoID) {

		$this->load->model('situacao_model');

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

		$res						= $this->situacao_model->get (array(), FALSE, $pagina);

		
		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->SituacaoID,
				"NOME"			=> $r->SituacaoDescricao,
				"URLEDITAR"		=> site_url ('secretaria/situacao/editar/'.$r->SituacaoID),
				"URLEXCLUIR"	=> site_url ('secretaria/situacao/excluir/'.$r->SituacaoID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}


		$edit 		=	$this->situacao_model->get(array ("SituacaoID" => $SituacaoID), FALSE);
		
		if ($edit) {

			foreach($edit as $item)	{

			$data['situacaoID'] = $item->SituacaoID;			
			$data['situacao'] = $item->SituacaoDescricao;
			

			}		

		} else {
				show_error ('Não foram encontrados os dados');
			}

		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('secretaria/situacao', $data);

	}

}