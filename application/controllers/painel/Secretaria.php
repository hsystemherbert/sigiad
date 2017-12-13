<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Secretaria extends MY_Controller {

    public function index()
    {

		$data  = array();

        $this->layout = 'dashboard';
		$this->parser->parse('painel/secretaria', $data);

	}
}