<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Igreja extends My_controller {
	
    public function __constructor(){
        parent::__constructor();
        
        $this->load->model('Igreja_model');
    }

	public function index(){

		 $this->load->model('Igreja_model');
		 $this->load->model('membro');
		
		$data							= array();
		$data ['IgrejaID']				= '';
		$data ['IgrejaNome'] 			= '';
		$data ['IgrejaLotacao'] 		= '';
		$data ['IgrejaEndereco'] 		= '';
		$data ['telefone1'] 			= '';
		$data ['telefone2']		 		= '';
		$data ['IgrejaEmail'] 			= '';
		$data ['IgrejaCNPJ'] 			= '';
		$data ['IgrejaCEP'] 			= '';
		$data ['dirigenteNome'] 		= '';
		$data ['dirigenteTel'] 			= '';
		$data ['dirigenteEmail'] 		= '';
		$data ['secretarioNome'] 		= '';
		$data ['secretarioTel'] 		= '';
		$data ['secretarioEmail'] 		= '';

		$data ['BLC_CAMPO'] 				= '';
		$data ['BLC_SETOR'] 				= '';
        $data ['BLC_BAIRRO'] 				= '';
        $data ['BLC_CIDADE'] 				= '';
        $data ['BLC_UF'] 			    	= '';
		$data ['BLC_DADOS']				= array();
		$data ['BLC_SEMDADOS']			= array();
		$data ['ACAO']					='';


		$campo						= $this->membro->get_campo ();

		if ($campo) {
			foreach ($campo as $r) {
				$data ['BLC_CAMPO'] []		= array(
				"ID"						=> $r->CampoID,
				"CAMPO"						=> $r->Campo,
				);
			}
		}	

		$setor						= $this->membro->get_setor ();

		if ($setor) {
			foreach ($setor as $r) {
				$data ['BLC_SETOR'] []	= array(
				"ID"					=> $r->IgrejaSetorID,
				"SETOR"					=> $r->Setor,
				);
			}	
		}

		$bairro						= $this->membro->get_bairro ();

		if ($bairro) {
			foreach ($bairro as $r) {
				$data ['BLC_BAIRRO'] []		= array(
				"ID"						=> $r->IDBairro,
				"NOME"						=> $r->NomeBairro,
				);
			}
		}	

		$cidade						= $this->membro->get_cidade ();

		if ($cidade) {
			foreach ($cidade as $r) {
				$data ['BLC_CIDADE'] []		= array(
				"ID"						=> $r->IDCidade,
				"NOME"						=> $r->NomeCidade,
				);
			}
		}

        $uf             			= $this->membro->get_uf ();

        if ($uf) {
            foreach ($uf as $r) {
                $data ['BLC_UF'] []		= array(
                    "ID"						=> $r->ufID,
                    "NOME"						=> $r->NomeUF
                );
            }
        }


        $pagina						= $this->input->get('pagina');

        $pagina = !$pagina ? 0 : ($pagina - 1) * 30;

		$res						= $this->Igreja_model->get (array(), FALSE, $pagina);

		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->IgrejaID,
				"NOME"			=> $r->IgrejaNome,
                "TIPO"			=> $r->IgrejaTipo,
                "LOTACAO" 		=> $r->IgrejaLotacao,
                "CIDADE"		=> $r->IgrejaCidade,
				"URLEDITAR"		=> site_url ('secretaria/Igreja/editar/'.$r->IgrejaID),
				"URLEXCLUIR"	=> site_url ('secretaria/Igreja/excluir/'.$r->IgrejaID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}

		$this->form_modal($data);
		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('secretaria/Igreja_form', $data);
	}


	public function salvar(){

		$this->load->library('JSON');
		$this->load->model('Igreja_model');

		$IgrejaID				= $this->input->post ('IgrejaID');
		$IgrejaNome 			= $this->input->post ('IgrejaNome');
		$IgrejaTipo 			= $this->input->post ('IgrejaTipo');
		$IgrejaLotacao 			= $this->input->post ('IgrejaLotacao');
		$IgrejaSetor 			= $this->input->post ('IgrejaSetor');
        $IgrejaCampo            = $this->input->post ('IgrejaCampo');
		$IgrejaEndereco 		= $this->input->post ('IgrejaEndereco');
		$IgrejaCidade 			= $this->input->post ('IgrejaCidade');
		$IgrejaBairro 			= $this->input->post ('IgrejaBairro');
		$IgrejaCEP 				= $this->input->post ('IgrejaCEP');
		$IgrejaUF 				= $this->input->post ('IgrejaUf');
		$telefone1 				= $this->input->post ('telefone1');
		$telefone2 				= $this->input->post ('telefone2');
		$IgrejaCNPJ 			= $this->input->post ('IgrejaCNPJ');
		$IgrejaEmail 			= $this->input->post ('IgrejaEmail');
        $dirigenteNome          = $this->input->post ('dirigenteNome');
        $dirigenteTel           = $this->input->post ('dirigenteTel');
        $dirigenteEmail         = $this->input->post ('dirigenteEmail');
        $secretarioNome         = $this->input->post ('secretarioNome');
        $secretarioTel          = $this->input->post ('secretarioTel');
        $secretarioEmail        = $this->input->post ('secretarioEmail');

		$erros 			= FALSE;
		$mensagem 		= null;

		
		if (!$IgrejaTipo) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Tipo da Igreja <br>';
		}

		if (!$erros) {

			$itens = array(	

				
				"IgrejaNome"		=>	$IgrejaNome, 
				"IgrejaTipo"		=>	$IgrejaTipo,
				"IgrejaLotacao"		=>	$IgrejaLotacao,
				"Cod_Setor"		    =>	$IgrejaSetor,
                "Cod_Campo"		    =>	$IgrejaCampo,
				"IgrejaEndereco"	=>	$IgrejaEndereco,
				"IgrejaCidade"		=>	$IgrejaCidade,
				"IgrejaBairro"		=>	$IgrejaBairro,
				"IgrejaCEP"			=>	$IgrejaCEP,
				"IgrejaUF"			=>	$IgrejaUF,
				"telefone1"	        =>	$telefone1,
                "telefone2"     	=>	$telefone2,
				"IgrejaCNPJ"		=>	$IgrejaCNPJ,
				"IgrejaEmail"		=>	$IgrejaEmail,
                "NomePastor"		=>	$dirigenteNome,
                "TelPastor"		    =>	$dirigenteTel,
                "EmailPastor"		=>	$dirigenteEmail,
                "NomeSecretario"	=>	$secretarioNome,
                "TelSecretario"		=>	$secretarioTel,
                "EmailSecretario"	=>	$secretarioEmail

			);

            if ($IgrejaID){

                $this->Igreja_model->update($itens, $IgrejaID);

                if ($IgrejaID){

                    $data ['sucesso'] = array("Dados Atualizados com Sucesso no Plano de Contas");
                    $data ['redirect'] = base_url('secretaria/Igreja');
                    echo json_encode($data);

                } else {

                    $data ['erro'] = array("Ocorreu um erro ao fazer a atualização dos dados");
                    echo json_encode($data);
                }
            } else {
                
                if ($this->Igreja_model->post($itens)) {

                    $data ['sucesso'] = array("Dados Inseridos com Sucesso no Plano de Contas");
                    $data ['redirect'] = base_url('secretaria/Igreja');
                    echo json_encode($data);

                } else {

                    $data ['erro'] = array("Ocorreu um erro ao fazer a inserção dos dados");
                    echo json_encode($data);
                }
            }
        } else {

            $data ['erro'] = array("Ocorreu um erro ao fazer a inserção dos dados");
            echo json_encode($data);
        }

	}

	private function setURL (&$data){

		$data ['ACAOFORM'] 	= base_url ('secretaria/Igreja/salvar');
		$data ['CANCELAR']	= base_url ('secretaria/Igreja');
		$data ['ACAO_MODAL_CAMPO']		= base_url ('secretaria/Igreja/form_modal');
		$data ['CAMPO']			= '';
		$data ['BLC_MENSAGEM']  = array();
		
	}

	public function excluir ($IgrejaID) {
        $this->load->library('JSON');
        $this->load->model('Igreja_model');

        $res 		=	$this->Igreja_model->excluir($IgrejaID);

        if ($res) {

            $data ['success'] = array("Dados Excluidos com Sucesso no Plano de Contas");
            echo json_encode($data);
            redirect('secretaria/Igreja', 'refresh');

        } else {

            $data ['errors'] = array("Ocorreu um erro ao excluir os dados no Plano de Contas");
            echo json_encode($data);
        }

	}

	public function editar($IgrejaID) {

		$this->load->model('Igreja_model');

		$data							= array();
		$data ['IgrejaID']				= '';
		$data ['IgrejaNome'] 			= '';
		$data ['IgrejaLotacao'] 		= '';
		$data ['IgrejaEndereco'] 		= '';
		$data ['telefone1'] 			= '';
		$data ['telefone2']		 		= '';
		$data ['IgrejaEmail'] 			= '';
		$data ['IgrejaCNPJ'] 			= '';
		$data ['IgrejaCEP'] 			= '';
		$data ['dirigenteNome'] 		= '';
		$data ['dirigenteTel'] 			= '';
		$data ['dirigenteEmail'] 		= '';
		$data ['secretarioNome'] 		= '';
		$data ['secretarioTel'] 		= '';
		$data ['secretarioEmail'] 		= '';

		$data ['BLC_DADOS']				= array();
		$data ['BLC_SEMDADOS']			= array();
		$data ['ACAO']					='';


		$pagina						= $this->input->get('pagina');

		if (!$pagina){
			$pagina = 0;
		} else {
			$pagina = ($pagina-1) *30;
		}

		$res						= $this->Igreja_model->get (array(), FALSE, $pagina);

		
		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->IgrejaID,
				"NOME"			=> $r->IgrejaNome,
                "TIPO"			=> $r->IgrejaTipo,
                "LOTACAO" 		=> $r->IgrejaLotacao,
                "CIDADE"		=> $r->IgrejaCidade,
               
				"URLEDITAR"		=> site_url ('secretaria/Igreja/editar/'.$r->IgrejaID),
				"URLEXCLUIR"	=> site_url ('secretaria/Igreja/excluir/'.$r->IgrejaID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}


		$edit 		=	$this->Igreja_model->get(array ("IgrejaID" => $IgrejaID), FALSE);
		
		if ($edit) {

			foreach($edit as $item)	{

				$data ['IgrejaID']				= $item->IgrejaID;
				$data ['IgrejaNome']			= $item->IgrejaNome; 
				$data ['IgrejaLotacao']			= $item->IgrejaLotacao;
				$data ['IgrejaSetor']			= $item->Cod_Setor;
               	$data ['IgrejaCampo']			= $item->Cod_Campo;
				$data ['IgrejaEndereco']		= $item->IgrejaEndereco;
				$data ['IgrejaCidade']			= $item->IgrejaCidade;
				$data ['IgrejaBairro']			= $item->IgrejaBairro;
				$data ['IgrejaCEP']				= $item->IgrejaCEP;
				$data ['IgrejaUF']				= $item->IgrejaUF;
				$data ['telefone1']				= $item->Telefone1;
               	$data ['telefone2']				= $item->Telefone2;
				$data ['IgrejaCNPJ']			= $item->IgrejaCNPJ;
				$data ['IgrejaEmail']			= $item->IgrejaEmail;
              	$data ['dirigenteTel']			= $item->TelPastor;
           	 	$data ['dirigenteEmail']		= $item->EmailPastor;
            	$data ['secretarioNome']		= $item->NomeSecretario;
            	$data ['secretarioTel']			= $item->TelSecretario;
            	$data ['secretarioEmail']		= $item->EmailSecretario;
			}		

		} else {
				show_error ('Não foram encontrados os dados');
			}
		$this->form_modal($data);
		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('secretaria/Igreja_form', $data);

	}

	public function form_modal() {

		$this->load->model('Campo_model');

		$Campo = $this->input->post('CAMPO');

		if ($Campo) {

				$item = array ("Campo" => $Campo);

			if ($this->Campo_model->post($item)){

			$data ['sucesso'] = array("Dados Excluidos com Sucesso no Plano de Contas");
            echo json_encode($data);

        	} else {

            $data ['errors'] = array("Ocorreu um erro ao excluir os dados no Plano de Contas");
            echo json_encode($data);
			}
		}
		
	}
}