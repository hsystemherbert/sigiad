<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cadastros extends My_controller {
	
    public function __constructor(){
        parent::__constructor();
    }

	public function index(){

		$this->layout = 'dashboard';
		$this->load->view('secretaria/cadastro_form');
		
	}
}