<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gerenciador extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

		$data  = array();

        $this->layout = 'dashboard';
		$this->parser->parse('painel/financeiro', $data);

	}
}