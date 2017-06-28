<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lancamentocaixa extends My_Controller {
	
    public function __constructor(){
        parent::__constructor();

    }

	public function index(){
		
		$this->Ativacaixa($dados = 1);

		$data 					= array();
		$data ['Ativacaixa'] 	= "";
		$data ['CaixaInicial']  = "";

		$Ativacaixa = $this->Ativacaixa();

		

		if ($Ativacaixa) {
			foreach ($Ativacaixa as $r) {
				$MesAtivo 		= $r->CaixaMes;
				$ValorInit 		= $r->CaixaValor;
			}
		}

		$ValorInicial 		   	= "R$ ".number_format($ValorInit, 2, ",", ".");

        $this->load->model('lancamento_caixa_model');
		$this->load->model('Igreja_model');
		$this->load->model('membro');
		$this->load->model('planocontas_model');

		$data['LancamentoID'] 		= "";
		$data['DataLancamento'] 	= "";
		$data['Historico'] 			= "";
		$data['Documento'] 			= "";
		$data['ValorLancamento'] 	= "";
		$data['PlanoConta'] 		= "";
		$data['PlanoContaID'] 		= "";

		$data['CodPlano']			= "";
		$data['NomePlano']			= "";

		
		$data['VALOR_ENTRADAS'] 	= "";
		$data['VALOR_SAIDAS'] 		= "";
		$data['TOTAL_CAIXA'] 		= "";

		$data['BLC_LOTACAO'] 		= array();
		$data['BLC_TIPODOCUMENTO'] 	= array();
		$data['BLC_DADOS'] 			= array();
		$data['BLC_PLANO']			= array();

		$data['VALOR_INICIAL']  	= $ValorInicial;
		$data['MES_ATIVO']          = $MesAtivo;
		
		$Lotacao 		= $this->Igreja_model->get();

		if($Lotacao) {
			foreach ($Lotacao as $r) {
				$data['BLC_LOTACAO'] [] = array(
				"ID" 		=> $r->IgrejaID,
				"LOTACAO"	=> $r->IgrejaLotacao
				);
			}
		}

		$Documento 		= $this->membro->get_TipoConta();

		if($Documento) {
			foreach ($Documento as $r) {
				$data['BLC_TIPODOCUMENTO'] [] = array(
					"ID" 		=> $r->TipoDocumentoID,
					"DOCUMENTO"	=> $r->TipoDocumento
				);
			}
		}

		
		$plano 		= $this->planocontas_model->get(array("planocontaCheck" => '1'));

		if($plano) {
			foreach ($plano as $r) {
				$data['BLC_PLANO'] [] = array(
					"COD" 		=> $r->PlanoContaID,
					"CODIGO" 	=> $r->PlanoCodContabil,
					"PLANO"		=> $r->PlanoDescricao
				);
			}
		}

        $Lancamento 		= $this->lancamento_caixa_model->get(array("MesCaixaAtivo" => $MesAtivo));
        	
        	foreach ($Lancamento as $r) {
        		$movimento 			= $r->Movimento;
        		$DataLancamento 	= $r->DataLancamento;
        		$ValorLancamento 	= $r->ValorLancamento;
        		$Valor 		   	=  "R$ ".number_format($ValorLancamento, 2, ",", ".");
        		if($movimento == 1) {
        			$movimento = "Entrada";
        		} elseif ($movimento == 2) {
        			$movimento = "Saída";
        		} else {
        			$movimento = "";
        		}
        		if ($DataLancamento){
            		$DataLancamento = date('d/m/y', strtotime($DataLancamento));
        		} 

				$data['BLC_DADOS'] [] = array(
					"ID" 			=> $r->LancamentoID,
					"MOVIMENTO" 	=> $movimento,
					"DATA"			=> $DataLancamento,
					"LOTACAO"		=> $r->IgrejaLotacao,
					"HISTORICO"		=> $r->Historico,
					"VALOR"			=> $Valor
				);
			}

			$Caixa = $this->ValoresCaixa();

		$ValorEntrada 				= $Caixa[0]->ValorLancamento;
		$ValorSaida 				= $Caixa[1]->ValorLancamento;
		$ValorTotal 				= ($ValorEntrada + $ValorInit) - $ValorSaida;
			

        $data['VALOR_ENTRADAS'] 	= "R$ ".number_format($ValorEntrada, 2, ",", ".");
        $data['VALOR_SAIDAS'] 		= "R$ ".number_format($ValorSaida, 2, ",", ".");
        $data['TOTAL_CAIXA'] 		= "R$ ".number_format($ValorTotal, 2, ",", ".");

        $this->setURL ($data);
        $this->layout = 'dashboard';
		$this->parser->parse('financeiro/lancamento_Caixa_form',$data);
	
	
	}

	public function salvar(){

        $Ativacaixa = $this->Ativacaixa();

        if ($Ativacaixa) {
            foreach ($Ativacaixa as $r) {
                $MesAtivo 		= $r->CaixaMes;
                $ValorInit 		= $r->CaixaValor;
            }
        }

	    $this->load->library('JSON');
		$this->load->model('lancamento_caixa_model');

		$LancamentoID 		= $this->input->post ('LancamentoID');
		$DataLancamento		= $this->input->post ('DataLancamento');
		$Historico			= $this->input->post ('Historico');
		$Documento 			= $this->input->post ('Documento');
		$ValorLancamento	= $this->input->post ('ValorLancamento');
		$PlanoContaID 		= $this->input->post ('PlanoContaID');
		$LancLotacao 		= $this->input->post ('LancLotacao');
		$TipoDocumento 		= $this->input->post ('TipoDocumento');
		$Movimento	 		= $this->input->post ('Movimento');
		$MesAtivado         = $MesAtivo;

		$erros 			= FALSE;
		$mensagem 		= null;

		if ($DataLancamento){
            $DataLan = DateTime::createFromFormat( 'd/m/Y', $DataLancamento );
            $DataDb = $DataLan->format('y-m-d');
        } else {
		    $DataDb = "";
        }

        if ($ValorLancamento){
        	$valor = explode('R$', $ValorLancamento);
            $ValorEx = $valor[1];
            $ValorDb = preg_replace('/[^0-9]/', '', $ValorEx) / 100;
        } else {
        	$ValorDb = "";
        }

		if (!$DataDb) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe a Data para o Lançamento';
		}

		if (!$LancLotacao) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe a Lotação para o Lançamento';
		}
		if ($Movimento == null) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Tipo de Movimento';
		}
		if (!$Historico) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Histórico do Lançamento';
		}
		if (!$ValorLancamento) {
			$erros		= TRUE;
			$mensagem 	.= 'Informe o Valor para o Lançamento';
		}
		if (!$PlanoContaID) {
			$erros		= FALSE;
			$mensagem 	.= 'Informe o Plano de Conta para o Lançamento';

		}


		if (!$erros) {

			$itens = array(
			
			'LancamentoID'			=> $LancamentoID,
			'DataLancamento'		=> $DataDb,
			'Historico'				=> $Historico,
			'NumDocumento'			=> $Documento,
			'ValorLancamento'		=> $ValorDb,
			'Cod_Contabil'			=> $PlanoContaID,
			'Cod_Lotacao'			=> $LancLotacao,
			'Cod_TipoDocumento'		=> $TipoDocumento,
			'Movimento'				=> $Movimento,
			'MesCaixaAtivo'			=> $MesAtivo,

			);

			if ($LancamentoID){
				$this->lancamento_caixa_model->update($itens, $LancamentoID);

                if ($LancamentoID){
                    $data ['sucesso'] = array("Lançamento Atualizado com Sucesso");
                    $data ['redirect'] = base_url('financeiro/Lancamentocaixa');
                    echo json_encode($data);
                } else {
                    $data ['errors'] = array("Ocorreu um erro ao fazer a atualização dos dados");
                    echo json_encode($data);
                }
            } else {
            	$post = $this->lancamento_caixa_model->post($itens);
                
                if ($post) {

                    $data ['sucesso'] = array("Lançamento feito com Sucesso");
                    $data ['redirect'] = base_url('financeiro/Lancamentocaixa');
                    echo json_encode($data);
               
                } else {
                    
                    $data ['errors'] = array("Ocorreu um erro ao fazer o Lançamento");
                    echo json_encode($data);
                }
            }

		} else {
			$data ['errors'] = array("Ocorreu um erro ao fazer a inserção dos dados");
           	echo json_encode($data);
		}
	}

	private function setURL (&$data){

		$data ['ACAOFORM'] 	= base_url ('financeiro/Lancamentocaixa/salvar');
		$data ['ACAO'] 		= base_url ('financeiro/Lancamentocaixa/PlanoConta');
		
	}

	public function excluir ($LancamentoID) {

		$this->load->library('JSON');
		$this->load->model('planocontas_model');

		$res 		=	$this->planocontas_model->excluir($LancamentoID);

		if ($res) {
			
			$data ['success'] = array("Dados Excluidos com Sucesso no Plano de Contas");
           	echo json_encode($data);
            redirect('contabilidade/planocontas', 'refresh');

		} else {

			$data ['errors'] = array("Ocorreu um erro ao excluir os dados no Plano de Contas");
           	echo json_encode($data);
		}
	}

	public function editar($LancamentoID) {

		$this->load->model('planocontas_model');

		$data						= array();
		$data ['BLC_DADOS']			= array();
		$data ['BLC_SEMDADOS']		= array();


		$pagina						= $this->input->get('pagina');

		if (!$pagina){
			$pagina = 0;
		} else {
			$pagina = ($pagina-1) *30;
		}

		$res				= $this->planocontas_model->get (array(), FALSE, $pagina);

		
		if ($res) {
			foreach ($res as $r) {
				$data ['BLC_DADOS'] []	= array(
				"ID"			=> $r->PlanoContaID,
				"COD"			=> $r->PlanoCodContabil,
				"NOME"			=> $r->PlanoDescricao,
				"CHECK"			=> $r->planocontaCheck,
				"URLEDITAR"		=> site_url ('contabilidade/planocontas/editar/'.$r->PlanoContaID),
				"URLEXCLUIR"	=> site_url ('contabilidade/planocontas/excluir/'.$r->PlanoContaID)
				);
			}
		} else {
			$data ['BLC_SEMDADOS'] []	= array();
		}


		$edit 		=	$this->planocontas_model->get(array ("PlanoContaID" => $PlanoContaID), FALSE);


		if ($edit) {

			foreach($edit as $item)	{

				$data ['planocontaID']	    = $item->PlanoContaID;
				$data ['planocontaCod'] 	= $item->PlanoCodContabil;
				$data ['planocontaDesc'] 	= $item->PlanoDescricao;
			}

		} else {
				show_error ('Não foram encontrados os dados');
			}

		$this->setURL ($data);

		$this->layout = 'dashboard';
        $this->parser->parse('contabilidade/planocontas_form', $data);

	}
	public function PlanoConta($redirect) {
		
		$this->load->model('planocontas_model');
		$data = array();

		if($redirect == "Plano") {

			$receitas = $this->planocontas_model->get(array(), FALSE);
			echo json_encode($receitas);
		}

		if($redirect == "Receitas") {
			$like = "4";
			$receitas = $this->planocontas_model->get(array(), $like, FALSE);

			echo json_encode($receitas);
		}
		if($redirect == "Despesas") {
			$like = "3";
			$receitas = $this->planocontas_model->get(array(), $like, FALSE);

			echo json_encode($receitas);
		}
		if($redirect == "Ativos") {
			$like = "1";
			$receitas = $this->planocontas_model->get(array(), $like, FALSE);

			echo json_encode($receitas);
		}
		if($redirect == "Passivos") {
			$like = "2";
			$receitas = $this->planocontas_model->get(array(), $like, FALSE);

			echo json_encode($receitas);
		}
		

		$this->setURL ($data);

	}

}