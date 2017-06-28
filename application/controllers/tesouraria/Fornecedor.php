<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fornecedor extends My_controller {
	
    public function __constructor(){
        parent::__constructor();
        
        $this->load->model('Fornecedor_model');
    }

	public function index(){

		 $this->load->model('Fornecedor_model');
		 $this->load->model('Atividade_model');
		 $this->load->model('membro');
		
		$data							= array();
		$data ['CODIGO']				= '';
		$data ['NomeRazao'] 			= '';
		$data ['NomeFantasia'] 			= '';
		$data ['Documento'] 			= '';
		$data ['InscricaoEstadual'] 	= '';
		$data ['InscricaoMunicipal'] 	= '';
		$data ['Endereco'] 				= '';
		$data ['Numero'] 				= '';
		$data ['CodigoPostal'] 			= '';
		$data ['Nacionalidade'] 		= '';
		$data ['Telefone1'] 			= '';
		$data ['Telefone2'] 			= '';
		$data ['EmailEmpresa'] 			= '';
		$data ['PessoaContato'] 		= '';
		$data ['TelefonePessoa'] 		= '';
		$data ['EmailPessoa'] 			= '';
		$data ['Observacao'] 			= '';


		$data ['BLC_ATIVIDADE']			= array();
		$data ['BLC_CIDADE']			= array();
		$data ['BLC_BAIRRO']			= array();
		$data ['BLC_UF']				= array();

		$data ['BLC_DADOS']				= array();
		$data ['BLC_SEMDADOS']			= array();
		$data ['BLC_MENSAGEM']			= array();
		
		$Atividade 		= 	$this->Atividade_model->get ();

		if ($Atividade) {
			foreach ($Atividade as $r) {
				$data ['BLC_ATIVIDADE'] []	= array(
				"ID"			=> $r->RamoAtividadeID,
				"ATIVIDADE" 	=> $r->RamoAtividade
				);
			}
		}

		$Cidade 		= 	$this->membro->get_cidade ();

		if ($Cidade) {
			foreach ($Cidade as $r) {
				$data ['BLC_CIDADE'] []	= array(
				"ID"		=> $r->IDCidade,
				"CIDADE" 	=> $r->NomeCidade
				);
			}
		}
		$Bairro 		= 	$this->membro->get_bairro ();

		if ($Bairro) {
			foreach ($Bairro as $r) {
				$data ['BLC_BAIRRO'] []	= array(
				"ID"		=> $r->IDBairro,
				"BAIRRO" 	=> $r->NomeBairro
				);
			}
		}
		$Estado 		= 	$this->membro->get_uf ();

		if ($Estado) {
			foreach ($Estado as $r) {
				$data ['BLC_UF'] []	= array(
				"ID"	=> $r->ufID,
				"UF" 	=> $r->NomeUF
				);
			}
		}


		$pagina							= $this->input->get('pagina');

		if (!$pagina){
			$pagina = 0;
		} else {
			$pagina = ($pagina-1) *30;
		}

		$res						= $this->Fornecedor_model->get (array(), FALSE, $pagina);

		

		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->FornecedorID,
				"RAZAO" 		=> $r->NomeRazao,
				"NOME"			=> $r->NomeFantasia,
				"ATIVIDADE" 	=> $r->RamoAtividade,
				"URLEDITAR"		=> site_url ('tesouraria/Fornecedor/editar/'.$r->FornecedorID),
				"URLEXCLUIR"	=> site_url ('tesouraria/Fornecedor/excluir/'.$r->FornecedorID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}
		
		
		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('tesouraria/Cad_fornecedor_form', $data);
	}

	public function salvar(){

        $this->load->library('JSON');
	    $this->load->model('Fornecedor_model');

		$FornecedorID 			= $this->input->post('CODIGO');
		$NomeRazao 				= $this->input->post('NomeRazao');
		$NomeFantasia 			= $this->input->post('NomeFantasia');
		$Documento 				= $this->input->post('Documento');
		$InscricaoEstadual 		= $this->input->post('InscricaoEstadual');
		$InscricaoMunicipal 	= $this->input->post('InscricaoMunicipal');
		$Endereco 				= $this->input->post('Endereco');
		$Numero 				= $this->input->post('Numero');
		$CodigoPostal 			= $this->input->post('CodigoPostal');
		$Nacionalidade 			= $this->input->post('Nacionalidade');
		$Telefone1 				= $this->input->post('Telefone1');
		$Telefone2 				= $this->input->post('Telefone2');
		$EmailEmpresa 			= $this->input->post('EmailEmpresa');
		$PessoaContato 			= $this->input->post('PessoaContato');
		$TelefonePessoa 		= $this->input->post('TelefonePessoa');
		$EmailPessoa 			= $this->input->post('EmailPessoa');
		$Observacao 			= $this->input->post('Observacao');
		$TipoEmpresa 			= $this->input->post('TipoEmpresa');
		$RamoAtividade 			= $this->input->post('RamoAtividade');
		$BairroFor 				= $this->input->post('Bairro');
		$CidadeFor 				= $this->input->post('Cidade');
		$Estado 				= $this->input->post('Estado');

		$erros 			= FALSE;
		$mensagem 		= null;

		if (!$NomeRazao) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Nome se Físico ou a Razão se Jurídico';
		}
		if (!$RamoAtividade) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Ramo de Atividade';
		}
		if (!$Documento) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe um tipo de Documento';
		}

		if (!$erros) {

			$itens = array(	

				"FornecedorID" 			=> $FornecedorID,
				"NomeRazao" 			=> $NomeRazao,
				"NomeFantasia" 			=> $NomeFantasia,
				"Documento" 			=> $Documento,
				"InscricaoEstadual" 	=> $InscricaoEstadual,
				"InscricaoMunicipal" 	=> $InscricaoMunicipal, 
				"Endereco" 				=> $Endereco,
				"Numero" 				=> $Numero,
				"CodigoPostal" 			=> $CodigoPostal,
				"Nacionalidade" 		=> $Nacionalidade,
				"Telefone1" 			=> $Telefone1,
				"Telefone2" 			=> $Telefone2,
				"EmailEmpresa" 			=> $EmailEmpresa,
				"PessoaContato" 		=> $PessoaContato,
				"TelefonePessoa" 		=> $TelefonePessoa,
				"EmailPessoa" 			=> $EmailPessoa,
				"Observacao" 			=> $Observacao,
				"Bairro" 				=> $BairroFor,
				"Cidade" 				=> $CidadeFor,
				"UF" 					=> $Estado,
				"TipoEmpresa" 			=> $TipoEmpresa,
				"RamoAtividade" 		=> $RamoAtividade
				);

			if ($FornecedorID){

				$this->Fornecedor_model->update($itens, $FornecedorID);

				if ($FornecedorID){

					$data ['sucesso'] = array("Fornecedor Editado com Sucesso");
                    $data ['redirect'] = base_url('tesouraria/Fornecedor');
                    echo json_encode($data);

				} else {
					
					$data ['errors'] = array("Ops! Falha ao Editar Fornecedor");
                    echo json_encode($data);
				}

			} else {
                if ($this->Fornecedor_model->post($itens)) {

                    $data ['sucesso'] = array("Fornecedor Cadastrado com Sucesso");
                   // $data ['redirect'] = base_url('tesouraria/Fornecedor');
                    echo json_encode($data);

                } else {
                    $data ['errors'] = array("Ops! Falha ao Cadastrar Fornecedor");
                    echo json_encode($data);
                }
            }

		} else {

			//$this->session->set_flashdata('erro', nl2br($mensagem));
			$data ['errors'] = array("Ops! Falha ao Cadastrar Fornecedor",$mensagem);
            echo json_encode($data);

		}
	}

	private function setURL (&$data){

		$data ['ACAOFORM'] 	= base_url ('tesouraria/Fornecedor/salvar');
		
	}

	public function excluir ($FornecedorID) {
		$this->load->model('Fornecedor_model');

		$res 		=	$this->Fornecedor_model->excluir($FornecedorID);

		if ($res) {
			
			$data ['sucesso'] = array("Fornecedor Cadastrado com Sucesso");
            $data ['redirect'] = base_url('tesouraria/Fornecedor');
            echo json_encode($data);

		} else {
			$data ['errors'] = array("Ops! Falha ao Excluir Fornecedor");
            echo json_encode($data);
		}

		//redirect('tesouraria/Fornecedor', 'refresh');

	}

	public function editar($AdmissaoID) {

		$this->load->model('admissao_model');

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

		$res						= $this->admissao_model->get (array(), FALSE, $pagina);

		
		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->AdmissaoID,
				"NOME"			=> $r->AdmissaoDescricao,
				"URLEDITAR"		=> site_url ('secretaria/Admissao/editar/'.$r->AdmissaoID),
				"URLEXCLUIR"	=> site_url ('secretaria/Admissao/excluir/'.$r->AdmissaoID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}


		$edit 		=	$this->admissao_model->get(array ("AdmissaoID" => $AdmissaoID), FALSE);
		
		if ($edit) {

			foreach($edit as $item)	{

			$data['AdmissaoID'] = $item->AdmissaoID;			
			$data['AdmissaoNome'] = $item->AdmissaoDescricao;
			

			}		

		} else {
				show_error ('Não foram encontrados os dados');
			}

		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('secretaria/admissao_form', $data);

	}

}