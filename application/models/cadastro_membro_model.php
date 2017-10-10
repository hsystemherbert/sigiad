<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro_membro_model extends CI_Model {

	public function get ($condicao = array()){
		$this->db->select('*');
		$this->db->where($condicao);
		$this->db->from ('sec_igreja');
		
		return $this->db->get() ->result();
		
	}
	
	public function post($from, $itens) {
		
		$res = $this->db->insert ($from, $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($MembroID){
		$this->db->where('MembroID', $MembroID, FALSE);
		return $this->db->delete ('sec_membro');
	}

	public function update ($itens, $MembroID) {
		$this->db->where('MembroID', $MembroID, FALSE);
		$this->db->set($itens);
		$res = $this->db->update ('sec_membro', $itens);

		if ($res) {
			return $MembroID;
		} else {
			return FALSE;
		}
	}
}