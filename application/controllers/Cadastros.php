<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cadastros extends My_controller {
	
    public function __constructor(){
        parent::__constructor();
        
        $this->load->model('Igreja_model');
    }

	public function Campo($item){


	}