<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administrativo extends My_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->model('model_main');

        $data                   = array();
        $data['BLC_USUARIO']    = array();
        $data['BLC_PERMISSAO']  = array();

        $data['TESTE']          = $sess_caixa;

        $usuario = $this->model_main->get(array(), $from= "adm_usuario", $condicao = array(), $primeiraLinha = FALSE, $pagina = 0);

        if($usuario){
            foreach ($usuario as $key) {
                $data['BLC_USUARIO'][] = array(
                    "ID"    => $key->idUsuario,
                    "USER"  => $key->nome,
                );
            }
        }


        $this->layout = 'dashboard';
		$this->parser->parse('painel/financeiro',$data);

	}

    public function financeiro
    {
        
    }
}