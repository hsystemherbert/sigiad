<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Membresia_model extends CI_Model {

	public function get ($condicao = array(), $primeiraLinha = FALSE, $pagina = 0){
		$this->db->select('*');
		$this->db->where($condicao);
		$this->db->from ('sec_membro');

		if ($primeiraLinha) {
			return $this->db->get()->first_row();
		} else {
			$this->db->limit (30, $pagina);
			return $this->db->get() ->result();
		}
	}
	
	public function post($itens) {
		$res = $this->db->insert ('sec_igreja', $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($IgrejaID){
		$this->db->where('IgrejaID', $IgrejaID, FALSE);
		return $this->db->delete ('sec_igreja');
	}

	public function update ($itens, $IgrejaID) {
		$this->db->where('IgrejaID', $IgrejaID, FALSE);
		$this->db->set($itens);
		$res = $this->db->update ('sec_igreja', $itens);

		if ($res) {
			return $inputID;
		} else {
			return FALSE;
		}
	}

	public function get_membro (){
		$this->db->select('IDMembro, FotoMembro, RolMembro, NomeMembro, Cod_Cargo, Cod_Lotacao');
		$this->db->from ('sec_membro');
		$this->db->join ('sec_cargo', 'CargoID= IDMembro');


		if ($primeiraLinha) {
			return $this->db->get()->first_row();
		} else {
			$this->db->limit (30, $pagina);
			return $this->db->get() ->result();
		}
	}
}