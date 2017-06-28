<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cargo_model extends CI_Model {

	public function get ($condicao = array(), $primeiraLinha = FALSE, $pagina = 0){
		$this->db->select('CargoID, CargoNome');
		$this->db->where($condicao);
		$this->db->from ('sec_cargo');

		if ($primeiraLinha) {
			return $this->db->get()->first_row();
		} else {
			$this->db->limit (30, $pagina);
			return $this->db->get() ->result();
		}
	}
	
	public function post($itens) {
		$res = $this->db->insert ('sec_cargo', $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($CargoID){
		$this->db->where('CargoID', $CargoID, FALSE);
		return $this->db->delete ('sec_cargo');
	}

	public function update($itens, $CargoID) {
		$this->db->where('CargoID', $CargoID, FALSE);
		$this->db->set('CargoNome');
		$res = $this->db->update ('sec_cargo', $itens);

		if ($res) {
			return $CargoID;
		} else {
			return FALSE;
		}
	}
	
}