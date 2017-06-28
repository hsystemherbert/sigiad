<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ContaPagar extends My_controller {
	
    public function __constructor(){
        parent::__constructor();
        
        $this->load->model('admissao_model');
    }

	public function index(){

		 $this->load->model('Igreja_model');
		 $this->load->model('ContaPagar_model');
		 $this->load->model('Fornecedor_model');
		 $this->load->model('membro');
		 $this->load->model('planocontas_model');
		
		$data						= array();
		$data ['codigoID']			= '';
		$data ['NumDocumento'] 		= '';
		$data ['Parcela'] 			= '';
		$data ['TotalParcelas'] 	= '';
		$data ['DataConta'] 		= '';
		$data ['DataVencimento'] 	= '';
		$data ['ValorConta'] 		= '';
		$data ['DescricaoConta'] 	= '';

		$data ['BLC_LOTACAO']		= array();
		$data ['BLC_FORNECEDOR']	= array();
		$data ['BLC_TIPOCONTA']		= array();
		$data ['BLC_PLANOCONTA']	= array();
		$data ['BLC_DADOS']			= array();
		$data ['BLC_SEMDADOS']		= array();
		$data ['BLC_MENSAGEM']		= array();

		$pagina						= $this->input->get('pagina');

		$lotacao	= $this->Igreja_model->get (array(), FALSE, $pagina);

		if ($lotacao) {
			foreach ($lotacao as $r) {
				$data ['BLC_LOTACAO'] []	= array(
				"ID"			=> $r->IgrejaID,
				"NOME"			=> $r->IgrejaLotacao,
				);
			}
		}

		$fornecedor	= $this->Fornecedor_model->get (array(), FALSE, $pagina);

		if ($fornecedor) {
			foreach ($fornecedor as $r) {
				$data ['BLC_FORNECEDOR'] []	= array(
				"ID"			=> $r->FornecedorID,
				"NOME"			=> $r->NomeFantasia
				);
			}
		}

		$conta	= $this->membro->get_TipoConta();

		if ($conta) {
			foreach ($conta as $r) {
				$data ['BLC_TIPOCONTA'] []	= array(
				"ID"			=> $r->TipoDocumentoID,
				"NOME"			=> $r->TipoDocumento
				);
			}
		}

		$planocontas	= $this->planocontas_model->get(array(), FALSE, $pagina);

		if ($planocontas) {
			foreach ($planocontas as $r) {
				$data ['BLC_PLANOCONTA'] []	= array(
				"ID"			=> $r->PlanoContaID,
				"COD"			=> $r->PlanoCodContabil,
				"NOME"			=> $r->PlanoDescricao
				);
			}
		}


		if (!$pagina){
			$pagina = 0;
		} else {
			$pagina = ($pagina-1) *30;
		}

		$res	= $this->ContaPagar_model->get (array("ContaPaga" => '0'), FALSE, $pagina);

		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(

				    "ID"			=> $r->ContaPagarID,
                    "LOTACAO"       => $r->IgrejaLotacao,
				    "PLANOCONTA"	=> $r->PlanoDescricao,
                    "TIPOCONTA"     => $r->TipoDocumento,
                    "DATAVENC"      => $r->DataVencimento,
                    "VALOR"         => $r->ValorParcela,
				    "URLEDITAR"		=> site_url ('tesouraria/ContaPagar/editar/'.$r->ContaPagarID),
                    "URLEXCLUIR"	=> site_url ('tesouraria/ContaPagar/excluir/'.$r->ContaPagarID)
				);
			}
			
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}
		
		
		$this->setURL ($data);

		$this->layout = 'dashboard';
			$this->parser->parse('tesouraria/Cad_ContaPagar_form', $data);
	}

	public function salvar(){

		$this->load->library('JSON');
		$this->load->model('ContaPagar_model');

		$ContaPagarID 		= $this->input->post ('codigoID');
		$NumDocumento 		= $this->input->post ('NumDocumento');
		$Parcela 			= $this->input->post ('Parcela');
		$TotalParcelas 		= $this->input->post ('TotalParcelas');
		$DataConta 			= $this->input->post ('DataConta');
		$DataVencimento 	= $this->input->post ('DataVencimento');
		$ValorConta 		= $this->input->post ('ValorConta');
		$DescricaoConta 	= $this->input->post ('DescricaoConta');
		$ContaLotacao		= $this->input->post ('Lotacao');
		$ContaFornecedor	= $this->input->post ('Fornecedor');
		$ContaTipo			= $this->input->post ('TipoConta');
		$PlanoConta			= $this->input->post ('PlanoConta');

		if ($DataConta){
            $dConta = DateTime::createFromFormat( 'd/m/Y', $DataConta );
            $DataContaDb = $dConta->format('y-m-d');
        } else {
		    $DataContaDb = "";
        }

        if ($DataVencimento) {
            $dVenc = DateTime::createFromFormat( 'd/m/Y', $DataVencimento );
            $DataVencDb = $dVenc->format('y-m-d');
        } else {
		    $DataVencDb = "";
        }

        if ($ValorConta) {
            $valor = explode('R$', $ValorConta);
            $ValorEx = $valor[1];
            $ValorDb = preg_replace('/[^0-9]/', '', $ValorEx) / 100;
        } else {
		    $ValorDb = "";
        }

		$erros 			= FALSE;
		$mensagem 		= null;

		if (!$ContaLotacao) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe a Lotação';
		}
		if (!$ContaFornecedor) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Fornecedor';
		}
		if (!$ContaTipo) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe um tipo de Conta';
		}
		if (!$PlanoConta) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Plano de Conta';
		}

		if (!$DataVencDb) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe a Data de Vencimento';
		}
		if (!$ValorDb) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Valor da Conta';
		}

		if (!$erros) {

			$itens = array(	

				"ContaPagarID"		=> $ContaPagarID,
				"NumeroDocumento"	=> $NumDocumento,
				"Parcela"			=> $Parcela,
				"TotalParcelas"		=> $TotalParcelas,
				"DataDaContaPagar"	=> $DataContaDb,
				"DataVencimento"	=> $DataVencDb,
				"ValorParcela"		=> $ValorDb,
				"Descricao"			=> $DescricaoConta,
				"Lotacao"			=> $ContaLotacao,
				"Cod_Fornecedor"	=> $ContaFornecedor,
				"TipoDocumento"		=> $ContaTipo,
				"Cod_PlanoConta" 	=> $PlanoConta

				);

			if ($ContaPagarID){
				
				if ($this->ContaPagar_model->update($itens, $ContaPagarID)){
					
					$data ['sucesso'] = array("Conta à Pagar Editada com Sucesso");
                    $data ['redirect'] = base_url('tesouraria/ContaPagar');
                    echo json_encode($data);
				} else {
					$data ['error'] = array("Falha ao Editar Conta à Pagar");
                    echo json_encode($data);
				}
			} else {

				if ($this->ContaPagar_model->post($itens)) {

					$data ['sucesso'] = array("Conta à Pagar Cadastrada com Sucesso");
                    $data ['redirect'] = base_url('tesouraria/ContaPagar');
                    echo json_encode($data);
				} else {
					$data ['error'] = array("Falha ao Cadastrar Conta à Pagar");
                    echo json_encode($data);
				}
			}
		} else {
			
			$data ['errors'] = array("Erro", $mensagem);
            echo json_encode($data);
		}
	}

	private function setURL (&$data){

		$data ['ACAOFORM'] 		= base_url ('tesouraria/ContaPagar/salvar');
		$data ['URLCANCELAR'] 	= base_url ('tesouraria/ContaPagar/index');
		
	}

	public function excluir () {
		$this->load->model('ContaPagar_model');

		$ContaPagarID 		= $this->input->post ('codigoID');
		
		$res 		=	$this->ContaPagar_model->excluir($ContaPagarID);

		if ($res) {
			$this->session->set_flashdata('Sucesso', 'Conta removida com sucesso');
		} else {
			$this->session->set_flashdata('erro', 'Falha ao excluir conta');
		}

		redirect('tesouraria/ContaPagar', 'refresh');

	}

	public function editar($ContaPagarID) {

		$this->load->model('ContaPagar_model');

		$data						= array();

        $data ['BLC_LOTACAO']		= array();
        $data ['BLC_FORNECEDOR']	= array();
        $data ['BLC_TIPOCONTA']		= array();
        $data ['BLC_DADOS']			= array();
        $data ['BLC_MENSAGEM']		= array();

		$pagina						= $this->input->get('pagina');

        if (!$pagina){
            $pagina = 0;
        } else {
            $pagina = ($pagina-1) *30;
        }

        $res	= $this->ContaPagar_model->get (array("ContaPaga" => '0'), FALSE, $pagina);

        if ($res) {
            foreach ($res as $r) {
                $data ['BLC_DADOS'] []	= array(

                    "ID"			=> $r->ContaPagarID,
                    "LOTACAO"       => $r->IgrejaLotacao,
                    "FORNECEDOR"	=> $r->NomeFantasia,
                    "TIPOCONTA"     => $r->TipoDocumento,
                    "DATAVENC"      => $r->DataVencimento,
                    "VALOR"         => $r->ValorParcela,
                    "URLEDITAR"		=> site_url ('tesouraria/ContaPagar/editar/'.$r->ContaPagarID)
                );
            }

        } 

		$edit 		=	$this->ContaPagar_model->get(array ("ContaPagarID" => $ContaPagarID), FALSE);
		
		if ($edit) {

			foreach($edit as $item)	{

		$data['codigoID']			= $item->ContaPagarID;
		$data['NumDocumento']		= $item->NumeroDocumento;
		$data['Parcela']			= $item->Parcela;
		$data['TotalParcelas']		= $item->TotalParcelas;
		$data['DataConta'] 			= $item->DataDaContaPagar;
		$data['DataVencimento'] 	= $item->DataVencimento;
		$data['ValorConta'] 		= $item->ValorParcela;
		$data['DescricaoConta'] 	= $item->Descricao;
		$data['ContaLotacao'] 		= $item->Lotacao;
		$data['ContaFornecedo'] 	= $item->Cod_Fornecedor;
		$data['ContaTipo'] 			= $item->TipoDocumento;
			
		}		

		} else {
				show_error ('Não foram encontrados os dados');
			}

		$this->setURL ($data);

		$this->layout = 'dashboard';
		$this->parser->parse('tesouraria/Cad_ContaPagar_form', $data);

	}

}