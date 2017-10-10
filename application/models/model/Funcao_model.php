<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Funcao_model extends CI_Model {

	public function get ($condicao = array(), $primeiraLinha = FALSE, $pagina = 0){
		$this->db->select('FuncaoExerceID, FuncaoExerceNome');
		$this->db->where($condicao);
		$this->db->from ('sec_funcao');

		if ($primeiraLinha) {
			return $this->db->get()->first_row();
		} else {
			$this->db->limit (30, $pagina);
			return $this->db->get() ->result();
		}
	}
	
	public function post($itens) {
		$res = $this->db->insert ('sec_funcao', $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($FuncaoExerceID){
		$this->db->where('FuncaoExerceID', $FuncaoExerceID, FALSE);
		return $this->db->delete ('sec_funcao');
	}

	public function update ($itens, $inputID) {
		$this->db->where('FuncaoExerceID', $inputID, FALSE);
		$this->db->set('FuncaoExerceNome');
		$res = $this->db->update ('sec_funcao', $itens);

		if ($res) {
			return $inputID;
		} else {
			return FALSE;
		}
	}
}