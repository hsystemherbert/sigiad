<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Planocontas_model extends CI_Model {

	public function get ($condicao = array(), $from = "", $primeiraLinha = FALSE, $pagina = 0){
		$this->db->select('*');
		$this->db->where($condicao);
		//$this->db->like('PlanoCodContabil', $like, 'after');
		$this->db->from ($from);

		if ($primeiraLinha) {
			return $this->db->get()->first_row();
		} else {
			return $this->db->get() ->result();
		}
	}
	
	
	public function post($itens) {

		$res = $this->db->insert ('financ_planoconta', $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($PlanoContaID){
		$this->db->where('PlanoContaID', $PlanoContaID, FALSE);
		return $this->db->delete ('financ_planoconta');
	}

	public function update($itens, $PlanoContaID) {
		$this->db->where('PlanoContaID', $PlanoContaID, FALSE);
		$this->db->set($itens);
		$res = $this->db->update ('financ_planoconta', $itens);

		if ($res) {
			return $PlanoContaID;
		} else {
			return FALSE;
		}
	}
	public function get_query ($sql){

		$query = $this->db->query($sql);
        
        return $query->result();
	}
}