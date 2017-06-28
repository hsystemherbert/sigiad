<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Membros extends My_controller {

	 public function __constructor(){
        parent::__constructor();
    }
	
	public function index() {

		 $this->load->model('membresia_model');
		
		$data						= array();
		$data ['idusuario']			= '';
		$data ['nomecargo'] 		= '';
		$data ['BLC_DADOS']			= array();
		$data ['BLC_SEMDADOS']		= array();



		$pagina						= $this->input->get('pagina');

		if (!$pagina){
			$pagina = 0;
		} else {
			$pagina = ($pagina-1) *30;
		}


		$res						= $this->membresia_model->get (array(), FALSE, $pagina);

		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->IDMembro,
                "FOTO"			=> $r->FotoMembro,
                "ROL"			=> $r->RolMembro,
                "NOME"			=> $r->NomeMembro,
                "CARGO"			=> $r->Cod_Cargo,
                "LOTACAO"		=> $r->Cod_Lotacao,
				"URLEDITAR"		=> site_url ('secretaria/membros/editar/'.$r->IDMembro),
				"URLEXCLUIR"	=> site_url ('secretaria/membros/excluir/'.$r->IDMembro)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}

		/*$res						= $this->membro->lista_cargos (array(), FALSE, $pagina);

		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->CargoID,
				"CARGO"			=> $r->CargoNome,
				"URLEDITAR"		=> site_url ('configuracoes/usuario/editar/.$r->idUsuario'),
				"URLEXCLUIR"	=> site_url ('configuracoes/usuario/excluir/.$r->idUsuario')
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}*/

		$this->layout = 'dashboard';
		$this->parser->parse('secretaria/membro_form', $data);
		$this->parser->parse('secretaria/situacao', $data);
	}
}