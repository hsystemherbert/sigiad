<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller {
	
    public function __constructor(){
        parent::__constructor();

        $this->load->library('JSON');
        $this->load->model('Login_model');
    }

	public function index(){

		$data							= array();
		$data ['idUsuario']				= '';
		$data ['loginuser'] 			= '';
		$data ['senhauser'] 			= '';
		$data ['ERRO']                  = '';


		$this->setURL ($data);
		$this->layout = 'maintample';
		$this->parser->parse('painel/login', $data);
	}

    public function Logar()
    {
        $this->load->library('JSON');
        $this->load->model('Login_model');
        //$this->load->model('pagina_model');

        $idUsuario			= $this->input->post ('idUsuario');
        $loginuser 			= $this->input->post ('loginuser');
        $senhauser 			= $this->input->post ('senhauser');

        $result = $this->Login_model->login($loginuser, $senhauser);

        if($result)
        {
            $sess_array = array();

            foreach($result as $row)
            {
                $idUsuario = $row->idUsuario;

                $sess_array['log'] = array(
                    'idUsuario' => $idUsuario,
                    'usuario'   => $row->login,
                    'nome'      => $row->nome,
                    'foto'      => $row->foto,
                    'setor'     => $row->NomeSetor
                );
            }

            $pagina = $this->Login_model->PermissaoUsuario($idUsuario);
            $sess_array['menu'] = $pagina;
            
            $grupo = $this->Login_model->PaginaGrupo();
            $sess_array['grupo'] = $grupo;

            $data ['sucesso'] = array("Login com sucesso");
                echo json_encode($data);

            $this->session->set_userdata('login',$sess_array);
                redirect(base_url('painel/principal'));
        }
        else
        {
           $data ['errors'] = array("usuário ou senha incorretos");
           echo json_encode($data);
        }
    }

	private function setURL (&$data)
    {

		$data ['ACAOFORM'] 	= base_url ('painel/Login/Logar');
		$data ['CANCELAR']	= base_url ('Home');
		
	}

    public function logout()
    {
        $this->session->unset_userdata("login");
        redirect(base_url('Home'));
    }

    public function pagina_login($idUsuario)
    {
       $this->load->model('Login_model');
       
        $pagina = $this->Login_model->PermissaoUsuario($idUsuario);
        $grupo  = $this->Login_model->PaginaGrupo();

        $array = array($pagina,$grupo);
        
        echo json_encode($array);
    }

}