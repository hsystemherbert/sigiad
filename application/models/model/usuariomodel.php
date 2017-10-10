<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Usuariomodel extends CI_Model {

	public function get ($condicao = array(), $primeiraLinha = FALSE, $pagina = 0){
		$this->db->select('idUsuario, login, nivel, nome, idSetor');
		$this->db->where($condicao);
		$this->db->from ('adm_usuario');

		if ($primeiraLinha) {
			return $this->db->get()->first_row();
		} else {
			$this->db->limit (30, $pagina);
			return $this->db->get() ->result();
		}
	}
	
	public function post($itens) {
		$res = $this->db->insert ('adm_usuario', $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($idusuario){
		$this->db->where('idUsuario', $idusuario, FALSE);
		return $this->db->delete ('adm_usuario');


	}
	public function login (){
		$this->db->select('login, password');
		$this->db->from('adm_usuario');

		return $this->db->login();
	}
}