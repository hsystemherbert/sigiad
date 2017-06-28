<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends My_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('Login_model');

        $usuario_logado = $this->session->userdata('login');

        $perfil = $usuario_logado['log']['setor'];

        switch ($perfil) {

        	case 'Administrador':
        		redirect('/painel/Gerenciador');
        		break;
        	case 'Secretario':
        		redirect('/painel/Secretaria');
        		break;
        	case 'Tesoureiro':
        		redirect('/painel/Financeiro');
        		break;
        	case 'Missoes':
        		redirect('/painel/Missoes');
        		break;
        	case 'Pastor':
        		redirect('/painel/Administrativo');
        		break;
        	case 'Departamento':
        		redirect('/painel/Departamento');
        		break;
        	
        	default:
        		redirect('/painel/Financeiro');
        		break;
        }
	}
}