<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Membresia extends My_controller {
	
    public function __constructor(){
        parent::__constructor();
        
        $this->load->model('cargo_model');
    }

	public function index(){

		 $this->load->model('membresia_model');
		 $this->load->model('cargo_model');
		 $this->load->model('membro');
		 $this->load->model('situacao_model');
		
		$data						= array();
		$data ['membroID']			= '';
		$data ['membroRol'] 		= '';
		$data ['membroNome'] 		= '';
		$data ['membroSexo'] 		= '';
		$data ['membroNasc'] 		= '';
		$data ['membroNatu'] 		= '';
		$data ['membroNaci'] 		= '';
		$data ['membrologra'] 		= '';
		$data ['membroComp'] 		= '';
		$data ['membroNumber'] 		= '';
		$data ['membroCep'] 		= '';
		$data ['membroRg'] 			= '';
		$data ['membroEmissao'] 	= '';
		$data ['membroCpf']		 	= '';
		$data ['membroPai'] 		= '';
		$data ['membroMae'] 		= '';
		$data ['membroConjuge'] 	= '';
		$data ['membroLotacao'] 	= '';



		$data ['BLC_CARGO']			= array();
		$data ['BLC_CIVIL']			= array();
		$data ['BLC_CIDADE']		= array();
		$data ['BLC_BAIRRO']		= array();
		$data ['BLC_UF']			= array();
		$data ['BLC_ORGAO']			= array();
		$data ['BLC_SITUACAO']		= array();

		$data ['BLC_DADOS']			= array();
		$data ['BLC_SEMDADOS']		= array();


		$cargo				= $this->cargo_model->get (array(), FALSE);

		if ($cargo) {
			foreach ($cargo as $r) {
				$data ['BLC_CARGO'] []	= array(
				"ID"			=> $r->CargoID,
				"NOME"			=> $r->CargoNome
				);
			}
		}

		$situacao				= $this->situacao_model->get (array(), FALSE);

		if ($situacao) {
			foreach ($situacao as $r) {
				$data ['BLC_SITUACAO'] []	= array(
				"ID"			=> $r->SituacaoID,
				"NOME"			=> $r->SituacaoDescricao
				);
			}
		}
		
		$civil		= $this->membro->get_estadocivil ();

		if ($civil) {
			foreach ($civil as $r) {
				$data ['BLC_CIVIL'] []	= array(
				"ID"					=> $r->ID,
				"NOME"					=> $r->EstadoCivil
				);
			}
		}

		$orgao		= $this->membro->get_orgaoemissor();

		if ($orgao) {
			foreach ($orgao as $r) {
				$data ['BLC_ORGAO'] []	= array(
				"ID"					=> $r->ID,
				"NOME"					=> $r->OrgaoRG
				);
			}
		}


		$bairro		= $this->membro->get_bairro();

		if ($bairro) {
			foreach ($bairro as $r) {
				$data ['BLC_BAIRRO'] []	= array(
				"ID"					=> $r->IDBairro,
				"NOME"					=> $r->NomeBairro
				);
			}
		}

		$cidade		= $this->membro->get_cidade();

		if ($cidade) {
			foreach ($cidade as $r) {
				$data ['BLC_CIDADE'] []	= array(
				"ID"					=> $r->IDCidade,
				"NOME"					=> $r->NomeCidade
				);
			}
		}

		$uf          = $this->membro->get_uf ();

        if ($uf) {
            foreach ($uf as $r) {
                $data ['BLC_UF'] []		= array(
                    "ID"				=> $r->ufID,
                    "NOME"				=> $r->NomeUF
                );
            }
        }

		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('secretaria/membresia_form', $data);
	}

	private function setURL (&$data){

		$data ['ACAOFORM'] 	= base_url ('secretaria/cargos/salvar');
	}


	public function salvar(){

		$this->load->model('membresia_model');


		$membroID			= $this->input->post ('membroID');
		$membroRol			= $this->input->post ('membroRol');
		$membroNome			= $this->input->post ('membroNome');
		$membroSexo			= $this->input->post ('membroSexo');
		$membroNasc			= $this->input->post ('membroNasc');
		$membroNatu			= $this->input->post ('membroNatu');
		$membroNaci			= $this->input->post ('membroNaci');
		$membrologra		= $this->input->post ('membrologra');
		$membroComp			= $this->input->post ('membroComp');
		$membroNumber		= $this->input->post ('membroNumber');
		$membroCep			= $this->input->post ('membroCep');
		$membroRg			= $this->input->post ('membroRg');
		$membroEmissao		= $this->input->post ('membroEmissao');
		$membroCpf		 	= $this->input->post ('membroCpf');
		$membroPai			= $this->input->post ('membroPai');
		$membroMae			= $this->input->post ('membroMae');
		$membroConjuge		= $this->input->post ('membroConjuge');
		$membroLotacao		= $this->input->post ('membroLotacao');
		
		

		$erros 			= FALSE;
		$mensagem 		= null;

		if (!$cargonome) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Setor do Usuário';
		}

		if (!$erros) {

			$itens = array(	

				"CargoNome" 			=> $cargonome,

				);

			if ($cargoid){
				$this->membresia_model->update($itens, $cargoid);
			} else {
				$this->membresia_model->post($itens);
			}
			if ($cargoid){
				$this->session->set_flashdata('Sucesso', 'Dados Inseridos com sucesso');
				redirect('secretaria/cargos', 'refresh');

			} else {
				$this->session->set_flashdata('erro', 'Ocorreu um erro ao realizar a inserção');

				if ($cargoid){
					redirect('cargos/editar/'.$cargoid);
				} else {
					redirect('secretaria/cargos', 'refresh');
				}
			}
		} else {
			$this->session->set_flashdata('erro', nl2br($mensagem));

			if ($cargoid){
					redirect('cargos/editar/'.$cargoid);
				} else {
					redirect('cargos/adicionar/adicionar');
				}
		}
	}
	
	public function excluir ($CargoID) {
		$this->load->model('cargo_model');

		$res 		=	$this->membresia_model->excluir($CargoID);

		if ($res) {
			$this->session->set_flashdata('Sucesso', 'Cargo removido com sucesso');
		} else {
			$this->session->set_flashdata('erro', 'Cargo não pode ser removido');
		}

		redirect('secretaria/cargos','refresh');

	}

	public function editar($CargoID) {

		$this->load->model('membresia_model');

		$data						= array();
		$data ['ACAO']				= 'Edição';
		$data ['BLC_DADOS']			= array();
		$data ['BLC_SEMDADOS']		= array();

		$pagina						= $this->input->get('pagina');

		if (!$pagina){
			$pagina = 0;
		} else {
			$pagina = ($pagina-1) *30;
		}

		$res						= $this->membresia_model->get (array(), FALSE, $pagina);

		
		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->CargoID,
				"NOME"			=> $r->CargoNome,
				"URLEDITAR"		=> site_url ('secretaria/cargos/editar/'.$r->CargoID),
				"URLEXCLUIR"	=> site_url ('secretaria/cargos/excluir/'.$r->CargoID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}


		$edit 		=	$this->membresia_model->get(array ("CargoID" => $CargoID), FALSE);
		
		if ($edit) {

			foreach($edit as $item)	{

			$data['cargoid'] 		= $item->CargoID;			
			$data['cargonome'] 		= $item->CargoNome;
			

			}		

		} else {
				show_error ('Não foram encontrados os dados');
			}

		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('secretaria/cargos', $data);

	}
}