<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Igreja_model extends CI_Model {

	public function get ($condicao = array()){
		$this->db->select('*');
		$this->db->where($condicao);
		$this->db->from ('sec_igreja');
		
		return $this->db->get() ->result();
		
	}
	
	public function post($itens) {
		$res = $this->db->insert ('sec_igreja', $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($IgrejaID){
		$this->db->where('IgrejaID', $IgrejaID, FALSE);
		return $this->db->delete ('sec_igreja');
	}

	public function update ($itens, $IgrejaID) {
		$this->db->where('IgrejaID', $IgrejaID, FALSE);
		$this->db->set($itens);
		$res = $this->db->update ('sec_igreja', $itens);

		if ($res) {
			return $inputID;
		} else {
			return FALSE;
		}
	}
}