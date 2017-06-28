<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Membro extends CI_Model {
	
	
	public function get_estadocivil(){
		return  $this->db->get('sec_estadocivil')->result();
		
	}
	public function get_orgaoemissor(){
		return  $this->db->get('sec_orgaorg')->result();
		
	}
	
	public function get_cidade(){
		return  $this->db->get('sec_cidade')->result();
		
	}

    public function get_uf(){
        return  $this->db->get('sec_uf')->result();

    }

	public function get_bairro(){
		return  $this->db->get('sec_bairro')->result();
		
	}

	public function get_campo(){
		return  $this->db->get('sec_igreja_campo')->result();
		
	}

	public function get_setor(){
		return  $this->db->get('sec_igreja_setor')->result();
		
	}
	public function get_TipoConta(){
		return  $this->db->get('tesouro_tipodocumento')->result();
		
	}
}
