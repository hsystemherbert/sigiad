<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LivroRol extends My_controller {
	
    public function __constructor(){
        parent::__constructor();
        
        $this->load->model('admissao_model');
    }

	public function index(){

		$this->load->model('model_main');
		
		$data						= array();

		$data ['NomeMembro']		= '';
		$data ['DataEntrada'] 		= '';
		$data ['BLC_NOME']			= array();
		$data ['BLC_ROL']			= array();
        $data ['BLC_SEMROL']		= array();

		
		$Nome   = $this->model_main->get(array("*"), $from = "sec_membro", array());

		if($Nome)
		{
			foreach ($Nome as $key)
			{
				$data ['BLC_NOME'] []	= array(

					"CODNOME"		=> $key->MembroID,
					"NOME"			=> $key->NomeMembro,
				);
			}
		}

		$res	= $this->model_main->get($select = array("*"), $from= "vw_ultimo_rol", $condicao = array());

		if ($res)
		{
			foreach ($res as $r)
			{
				$data ['BLC_ROL'] []	= array(

					"RolID"   				=> $r->RolID,
					"NomeMembro"   			=> $r->NomeMembro,
					"DataEntrada"   		=> $r->DataEntrada,
					"SituacaoCadastral"   	=> $r->SituacaoCadastral,
					"DataBatismoAguas"   	=> $r->DataBatismoAguas,
					"Procedencia"   		=> $r->Procedencia,
					"DescricaoProcedencia"  => $r->DescricaoProcedencia
				);
			}
			
		} else
		{
			$data ['BLC_SEMROL'] []	= array();
		}
		
		
		$this->setURL ($data);
		$this->layout = 'dashboard';
		$this->parser->parse('secretaria/LivroRol_form', $data);
	}

	public function salvar()
    {

		$this->load->model('model_main');

		$CodMembro 		= $this->input->post ('CodMembro');
		$DataEntrada	= $this->input->post ('DataEntrada');

		$erros 			= FALSE;
		$mensagem 		= null;
		$data           = array();

		if (!$CodMembro)
		{
			$erros		= TRUE;
		}
		if(!$DataEntrada)
        {
            $erros      = TRUE;
        }

		if (!$erros) {

			$itens = array(	

				"DataEntrada" 	  => $DataEntrada,
                "Cod_Membro"      => $CodMembro

            );

			$from    = "sec_livro_rol";

			$return  = $this->model_main->post($from, $itens);

			if ($return)
			{
				$data['RolMembro'] = $return;
				$data['result']    = "success";

			} else
            {
                $data['result'] = "error";
			}

		} else
        {
            $data['result'] = "error-validation";
		}

		echo json_encode($data);
	}

	private function setURL (&$data){

		$data ['ACAOFORM'] 	= base_url ('secretaria/Admissao/salvar');
		
	}

	public function excluir ($AdmissaoID) {
		$this->load->model('admissao_model');

		$res 		=	$this->admissao_model->excluir($AdmissaoID);

		if ($res) {
			$this->session->set_flashdata('Sucesso', 'Usuário removido com sucesso');
		} else {
			$this->session->set_flashdata('erro', 'Usuário não pode ser removido');
		}

		redirect('secretaria/Admissao', 'refresh');

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

	public function Consultar()
	{
	    $this->load->model('model_main');

        $CodMembro  = $_POST['CodMembro'];
        $mensagem   = "";
        $retorno    = "";
        $error      = false;

        if($CodMembro)
        {
            $return = $this->model_main-> get($select = array("*"), $from= "vw_dados_consulta_cadrol", $condicao = array("MembroID" => $CodMembro));

            if($return)
            {
                foreach ($return as $q)
                {
                    $DataBatismo    = $q->DataBatismoAguas;
                    $DescProcedencia = $q->DescricaoProcedencia;
                    $Procedencia    = $q->Procedencia;
                }

                if(empty($DataBatismo))
                {
                    $mensagem = "batismo";
                    $error = true;
                }
                if(empty($DescProcedencia))
                {
                    $mensagem = "descProcedencia";
                    $error = true;
                }
                if(empty($DataBatismo) && empty($DescProcedencia))
                {
                    $mensagem = "DescBatismo";
                }

                if(!$error)
                {
                    $mensagem = "validation";
                }

            } else
            {
                $mensagem = "Error";
            }

        } else
        {
            $mensagem = "ErrorCod";
        }

        echo json_encode($mensagem);
	}

	public function Consultar_membro_rol ()
    {
        $this->load->model('model_main');

        $CodMembroRol     = $_POST['CodMembroRol'];

        $error    = false;
        $mensagem = array();

        if($CodMembroRol)
        {

            $return = $this->moddel_main-> get(array("*"), "vw_consulta_rol", array("MembroID"=>$CodMembroRol));

            if($return)
            {
                foreach ($return as $r)
                {
                    $mensagem['RolID']                = $r->RolID;
                    $mensagem['NomeMembro']           = $r->NomeMembro;
                    $mensagem['DataEntrada']          = $r->DataEntrada;
                    $mensagem['SituacaoCadastral']    = $r->SituacaoCadastral;
                    $mensagem['DataBatismoAguas']     = $r->DataBatismoAguas;
                    $mensagem['Procedencia']          = $r->Procedencia;
                    $mensagem['DescricaoProcedencia'] = $r->DescricaoProcedencia;
                }


            } else
            {
                $mensagem['result'] = "SemDados";
            }

        }else
        {
            $mensagem['result'] =  "ErrorValidation";
        }
    }
    public function Lista ()
    {
        $this->load->model('model_main');

        $mensagem = array();
        $mensagem['dados'] = array();

        $return  = $this->model_main->get(array("*"),"vw_consulta_rol",array());

        if($return)
        {
            $mensagem['result']  = "success";

            foreach ($return as $r)
            {
                $mensagem['data'][] = array(
                    "RolID"                 => $r->RolID,
                    "NomeMembro"            => $r->NomeMembro,
                    "DataEntrada"           => $r->DataEntrada,
                    "DataBatismoAguas"      => $r->DataBatismoAguas,
                    "Procedencia"           => $r->Procedencia,
                    "DescricaoProcedencia"  => $r->DescricaoProcedencia
                );
            }

        }else
        {
            $mensagem['result'] = "SemDados";
        }

        echo json_encode($mensagem);
    }

}