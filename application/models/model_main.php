<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_main extends CI_Model {

	public function get ($select = array(), $from= "", $condicao = array(), $primeiraLinha = FALSE, $pagina = 0){
		$this->db->select($select);
		$this->db->where($condicao);
		$this->db->from ($from);

		if ($primeiraLinha) {
			return $this->db->get()->first_row();
		} else {
			return $this->db->get() ->result();
		}
	}

	public function get_query ($sql){

		$query = $this->db->query($sql);
        
        return $query->result();
	}
	
	public function post($from, $itens) {
		$res = $this->db->insert ($from, $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($NomeCampo, $ID, $from){
		$this->db->where($NomeCampo, $ID, FALSE);
		return $this->db->delete ($from);
	}

	public function update($NomeCampo, $itens, $ID, $from) {
		$this->db->where('AdmissaoID', $ID, FALSE);
		$res = $this->db->update ($from, $itens);

		if ($res) {
			return $ID;
		} else {
			return FALSE;
		}
	}
}