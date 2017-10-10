<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Teste extends CI_Model {

	public function lista_dados(){

		return  $this->db->get('teste')->result();
	}
	
}