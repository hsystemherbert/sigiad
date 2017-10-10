<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fornecedor_model extends CI_Model {

	public function get ($condicao = array(), $primeiraLinha = FALSE, $pagina = 0){
		$this->db->select('*');
		$this->db->join('tesouro_ramo_atividade','RamoAtividadeID = tesouro_fornecedor.RamoAtividade');
		$this->db->where($condicao);
		$this->db->from ('tesouro_fornecedor');

		if ($primeiraLinha) {
			return $this->db->get()->first_row();
		} else {
			$this->db->limit (30, $pagina);
			return $this->db->get() ->result();
		}
	}
	
	public function post($itens) {
		$res = $this->db->insert ('tesouro_fornecedor', $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($FornecedorID){
		$this->db->where('FornecedorID', $FornecedorID, FALSE);
		return $this->db->delete ('tesouro_fornecedor');
	}

	public function update ($itens, $FornecedorID) {
		$this->db->where('FornecedorID', $FornecedorID, FALSE);
		$this->db->set($itens);
		$res = $this->db->update ('tesouro_fornecedor', $itens);

		if ($res) {
			return $inputID;
		} else {
			return FALSE;
		}
	}
}