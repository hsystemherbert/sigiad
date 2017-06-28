<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administrativo extends My_controller {
	
    public function __constructor(){
        parent::__constructor();
        
        $this->load->model('usuariomodel');
    }

	public function index(){

		$this->load->model('model_main');

        $data                   = array();
        $data['BLC_USUARIO']    = array();
        $data['BLC_PERMISSAO']  = array();
        
        $usuario = $this->model_main->get(array(), $from= "adm_usuario", $condicao = array(), $primeiraLinha = FALSE, $pagina = 0);

        if($usuario){
            foreach ($usuario as $key) {
                $data['BLC_USUARIO'][] = array(
                    "ID"    => $key->idUsuario,
                    "USER"  => $key->nome,
                );
            }
        }

		
		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('configuracoes/Administrativo_form', $data);
	}

	public function validarusuario($usuarioID){

		$this->load->model('model_main');
        
        $usuario = $this->model_main->get(array('idUsuario','nome'), $from = "adm_usuario", $condicao = "idUsuario = $usuarioID", $primeiraLinha = FALSE, $pagina = 0);

        if($usuario){

        	echo json_encode($usuario);
        }

	}

	public function cadastromenu(){

		$this->load->model('model_main');

		$data 				= array();


		$sub_menu  = $this->model_main->get(array(), $from = "adm_paginas", $condicao = array(), $primeiraLinha = FALSE, $pagina = 0);
		$menu = $this->model_main->get(array(), $from = "adm_paginas_grupos", $condicao = array(), $primeiraLinha = FALSE, $pagina = 0);

		$data['menu'] = $menu;
		$data['SubMenu'] = $sub_menu;

		echo json_encode($data);



		// if($sub_menu){
		// 	$pagina_array = array();
		// 	$pagina 	  = array();

		// 	for ( $i = 0; $i < count($sub_menu); $i++ ) {
  //               $pagina_array[] = get_object_vars($sub_menu[$i]);
  //           }
		// } else{
		// 	$error = true;
		// }

		// if($menu){
		// 	$grupo_arr = array();
		// 	$grupo 	   = array();
		// 	$grupo_array = array();

		// 	foreach ($menu as $key => $value) {
		// 		$grupo_arr[] = $value->ordem;
		// 	}

		// 	asort($grupo_arr);

		// 	foreach ($grupo_arr as $key => $value) {
  //               $grupo[]  = $menu[$key];
  //           }

  //           for ( $x = 0; $x < count($grupo); $x++) {
  //               $grupo_array[] = get_object_vars($grupo[$x]);
  //           }
		// } else {
		// 	$error = true;
		// }

		// if ($error == true) {
		// 	echo "Ocorreu um erro na chamada do menu";
		// } else {

		// 	for ($i=0, $f=1; $i < count($grupo_array); $i++, $f++) 
		// 	{ 
		// 		if ($grupo_array[$i]['ordem'] == $f)
		// 		{
					
		// 			$grupoPagina = $grupo_array[$i]['nome'];

		// 			$data['BLC_MENU'][] = array("MENU"=>$grupo_array[$i]['nome']);

		// 		}else{
		// 			echo "Erro";
		// 			die();
		// 		}
		// 		for ($x=0; $x < count($pagina_array) ; $x++) 
		// 			{ 
		// 				if($pagina_array[$x]['idPaginaGrupo'] == $grupoPagina)
		// 				{
		// 					$data['BLC_SUB'][] = array("SUBMENU"=>$pagina_array[$x]['nome']);

		// 				}
		// 			}
		// 	}

		// }
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