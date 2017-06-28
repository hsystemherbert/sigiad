<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admissao_model extends CI_Model {

	public function get ($condicao = array(), $primeiraLinha = FALSE, $pagina = 0){
		$this->db->select('AdmissaoID, AdmissaoDescricao');
		$this->db->where($condicao);
		$this->db->from ('sec_admissao');

		if ($primeiraLinha) {
			return $this->db->get()->first_row();
		} else {
			$this->db->limit (30, $pagina);
			return $this->db->get() ->result();
		}
	}
	
	public function post($itens) {
		$res = $this->db->insert ('sec_admissao', $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($AdmissaoID){
		$this->db->where('AdmissaoID', $AdmissaoID, FALSE);
		return $this->db->delete ('sec_admissao');
	}

	public function update($itens, $AdmissaoID) {
		$this->db->where('AdmissaoID', $AdmissaoID, FALSE);
		$this->db->set('AdmissaoDescricao');
		$res = $this->db->update ('sec_admissao', $itens);

		if ($res) {
			return $AdmissaoID;
		} else {
			return FALSE;
		}
	}
}