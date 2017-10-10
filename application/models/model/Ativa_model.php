<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ativa_model extends CI_Model {

	public function get(){
		$this->db->select('*');
		$this->db->where('CaixaAtivo = 1');
		$this->db->from ('financ_caixa');
		return $this->db->get() ->result();
	}

	public function get_ativo(){
		$this->db->select('AtivaCaixaID, CaixaMes, CaixaValor, CaixaAtivo');
		$this->db->where('CaixaAtivo = 1');
		$this->db->from ('financ_caixa');
		return $this->db->get() ->result();
	}
	
	public function post($itens) {
		$res = $this->db->insert ('financ_caixa', $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}
	public function update($item, $AtivaCaixaID) {
		$this->db->where('AtivaCaixaID', $AtivaCaixaID, FALSE);
		$this->db->set('CaixaAtivo');
		$res = $this->db->update ('financ_caixa', $item);

		if ($res) {
			return $AtivaCaixaID;
		} else {
			return FALSE;
		}
	}
}