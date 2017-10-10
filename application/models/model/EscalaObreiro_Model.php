<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class EscalaObreiro_Model extends CI_Model {

	public function get ($condicao = array(), $primeiraLinha = FALSE, $pagina = 0){
		$this->db->select('DepartamentoID, DepartamentoNome, DepartamentoSigla, DepartamentoLider, DepartamentoVice');
		$this->db->where($condicao);
		$this->db->from ('sec_departamento');

		if ($primeiraLinha) {
			return $this->db->get()->first_row();
		} else {
			$this->db->limit (30, $pagina);
			return $this->db->get() ->result();
		}
	}
	
	public function post($itens) {
		$res = $this->db->insert ('sec_departamento', $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($DepartamentoID){
		$this->db->where('DepartamentoID', $DepartamentoID, FALSE);
		return $this->db->delete ('sec_departamento');
	}

	public function update($itens, $DepartamentoID) {
		$this->db->where('DepartamentoID', $DepartamentoID, FALSE);
		$this->db->set('DepartamentoNome');
		$this->db->set('DepartamentoSigla');
		$this->db->set('DepartamentoLider');
		$this->db->set('DepartamentoVice');
		$res = $this->db->update ('sec_departamento', $itens);

		if ($res) {
			return $DepartamentoID;
		} else {
			return FALSE;
		}
	}
}