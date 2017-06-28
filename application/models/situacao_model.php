<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Situacao_model extends CI_Model {

	public function get ($condicao = array(), $primeiraLinha = FALSE, $pagina = 0){
		$this->db->select('SituacaoID, SituacaoDescricao');
		$this->db->where($condicao);
		$this->db->from ('sec_situacao');

		if ($primeiraLinha) {
			return $this->db->get()->first_row();
		} else {
			$this->db->limit (30, $pagina);
			return $this->db->get() ->result();
		}
	}
	
	public function post($itens) {
		$res = $this->db->insert ('sec_situacao', $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($SituacaoID){
		$this->db->where('SituacaoID', $SituacaoID, FALSE);
		return $this->db->delete ('sec_situacao');
	}

	public function update($itens, $situacaoID) {
		$this->db->where('SituacaoID', $situacaoID, FALSE);
		$this->db->set('SituacaoDescricao');
		$res = $this->db->update ('sec_situacao', $itens);

		if ($res) {
			return $situacaoID;
		} else {
			return FALSE;
		}
	}
}