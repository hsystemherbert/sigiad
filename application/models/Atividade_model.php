<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Atividade_model extends CI_Model {

	public function get (){
		$this->db->select('*');
		$this->db->from ('tesouro_ramo_atividade');
		
		return $this->db->get() ->result();
	
	}
	
	public function post($itens) {
		$res = $this->db->insert ('tesouro_ramo_atividade', $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($RamoID){
		$this->db->where('RamoAtividadeID', $RamoID, FALSE);
		return $this->db->delete ('tesouro_ramo_atividade');
	}

	public function update ($itens, $RamoID) {
		$this->db->where('RamoAtividadeID', $RamoID, FALSE);
		$this->db->set($itens);
		$res = $this->db->update ('tesouro_ramo_atividade', $itens);

		if ($res) {
			return $inputID;
		} else {
			return FALSE;
		}
	}
}