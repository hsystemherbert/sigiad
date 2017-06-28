<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends My_controller {
	
    public function __constructor(){
        parent::__constructor();
        
        $this->load->model('usuariomodel');
    }

	public function index(){

		 $this->load->model('usuariomodel');
		 $this->load->model('model_main');
		
		$data						= array();
		$data ['idusuario']			= '';
		$data ['setorusuario'] 		= '';
		$data ['nomeusuario'] 		= '';
		$data ['nivelusuario'] 		= '';
		$data ['loginusuario']		= '';
		$data ['BLC_SETOR']		    = array();
		$data ['BLC_DADOS']			= array();
		$data ['BLC_SEMDADOS']		= array();

		$pagina						= $this->input->get('pagina');

		if (!$pagina){
			$pagina = 0;
		} else {
			$pagina = ($pagina-1) *30;
		}

		$setor = $this->model_main->get (array("*"), $from = "adm_setores", array(), FALSE, $pagina);

		if ($setor) {
			foreach ($setor as $r) {
				$data ['BLC_SETOR'] []	= array(
				"ID"			=> $r->idSetor,
				"SETOR_USER"	=> $r->nome,
				);
			}
			
		}


		$res = $this->usuariomodel->get (array(), FALSE, $pagina);

		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
					
				"ID"			=> $r->idUsuario,
				"NOME"			=> $r->nome,
				"LOGIN"			=> $r->login,
				"SETOR"			=> $r->idSetor,
				"URLEDITAR"		=> site_url ('configuracoes/usuario/editar/.$r->idUsuario'),
				"URLEXCLUIR"	=> site_url ('configuracoes/usuario/excluir/.$r->idUsuario')
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}

		
		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('configuracoes/usuario_form', $data);
	}

	public function salvar(){

		$this->load->model('usuariomodel');

		$idusuario			= $this->input->post ('idusuario');
		$setorusuario 		= $this->input->post ('setorusuario');
		$nomeusuario 		= $this->input->post ('nomeusuario');
		$nivelusuario 		= $this->input->post ('nivelusuario');
		$loginusuario 		= $this->input->post ('loginusuario');
		$senhausuario		= $this->input->post ('senhausuario');
		$confsenhausuario	= $this->input->post ('confsenhausuario');

		$erros 			= FALSE;
		$mensagem 		= null;

		if (!$setorusuario) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Setor do Usuário';
		}
		if (!$nomeusuario) {
			$erros		=TRUE;
			$mensagem	.= 'Informe o Nome do Usuário';
		}
		if (!$nivelusuario) {
			$erros		=TRUE;
			$mensagem	.= 'Informe o Nível do Usuário';
		}
		if (!$senhausuario) {
			if (!$confsenhausuario) {
				if ($senhausuario == $confsenhausuario){
					if (!$idusuario) {
						$erros			=TRUE;
						$mensagem		.= 'Informe a Senha do Usuário';
					}
				} else {
					echo "Senha Incorreta";
				}
			}
		}

		if (!$erros) {

			$itens = array(

				"idSetor" 		=> $setorusuario,
				"nome" 			=> $nomeusuario,
				"nivel" 		=> $nivelusuario,
				"login" 		=> $loginusuario

				);

			if ($senhausuario) {
				$itens ['password'] = $senhausuario;
			}
			if ($idusuario){
				$this->usuariomodel->update($itens, $idusuario);
			} else {
				$this->usuariomodel->post($itens);
			}
			if ($idusuario){
				//$this->session->set_flashdata('Sucesso', 'Dados Inseridos com sucesso');
				echo "Cadastrado com sucesso";
				redirect('usuario');
			} else {
				//$this->session->set_flashdata('erro', 'Ocorreu um erro ao realizar a inserção');
				echo "Ocorreu um erro";

				if ($idusuario){
					redirect('usuario/editar/'.$idusuario);
				} else {
					redirect('configuracoes/usuario', 'refresh');
				}
			}
		} else {
			//$this->session->set_flashdata('erro', nl2br($mensagem));

			if ($idusuario){
					redirect('usuario/editar/'.$idusuario);
				} else {
					redirect('usuario/adicionar/adicionar');
				}
		}
	}

	private function setURL (&$data){

		$data ['ACAOFORM'] 	= base_url ('configuracoes/usuario/salvar');
		
	}

	public function excluir ($id) {
		$this->load->model('usuariomodel');

		$res 		=	$this->usuariomodel->delete($id);

		if ($res) {
			//$this->session->set_flashdata('Sucesso', 'Usuário removido com sucesso');
			echo "Cadastrado com sucesso";
		} else {
			//$this->session->set_flashdata('erro', 'Usuário não pode ser removido');
			echo "Cadastrado com sucesso";
		}

		redirect('configuracoes/usuario','refresh');

	}
}