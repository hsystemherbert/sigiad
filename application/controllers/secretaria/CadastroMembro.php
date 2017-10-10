<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class CadastroMembro extends My_Controller {

    public $dados;

    public function index()
    {

        $this->load->model('model_main');
		$this->load->model('Igreja_model');


        $data  = array();

        $data['CodMembro']           = "";
        $data['NomeMembro']          = "";
        $data['DataNascimento']      = "";
        $data['Naturalidade']        = "";
        $data['EstadoNaturalidade']  = "";
        $data['Sexo']                = "";
        $data['Logradouro']          = "";
        $data['Numero']              = "";
        $data['Bairro']              = "";
        $data['Cidade']              = "";
        $data['Cep']                 = "";
        $data['EstadoLogadrouro']    = "";
        $data['NomePai']             = "";
        $data['NomeMae']             = "";
        $data['EstadoCivil']         = "";
        $data['Conjuge']             = "";
        $data['DataCasamento']       = "";
        $data['Telefone']            = "";
        $data['CadTelefone']         = "";
        $data['Email']               = "";
        $data['Cpf']                 = "";
        $data['Identidade']          = "";
        $data['DataEmissao']         = "";
        $data['OrgaoEmissor']        = "";
        

        $data['RolMembro']                  = "";
        $data['DescricaoProcedencia']       = "";
        $data['IgrejaBatismoAguas']         = "";
        $data['DataBatismoAguas']           = "";
        $data['DataBatismoEspiritoSanto']   = "";

        
        $data['BLC_LOTACAO']         = array();
        $data['BLC_CARGO']           = array();
        $data['BLC_FUNCAO']          = array();
        $data['BLC_PROCEDENCIA']     = array();
        $data['BLC_EMISSOR']         = array();



        $lotacao = $this->Igreja_model->get(array());

        if($lotacao)
        {
            foreach ($lotacao as $key)
            {
                $data['BLC_LOTACAO'][] = array(
                    
                    "CODLOTACAO"  =>$key->IgrejaID,
                    "LOTACAO"     =>$key->NomeLotacao
                );
            }
        }

        $cargo = $this->model_main->get ($select = array("*"), $from= "sec_cargos", $condicao = array());

        if($cargo)
        {
            foreach ($cargo as $key)
            {
                $data['BLC_CARGO'][] = array(
                    
                    "CODCARGO"  =>$key->CargosID,
                    "CARGO"     =>$key->Cargos
                );
            }
        } else
        {
            $data['BLC_CARGO'][] = array(
                    "CARGO"     =>"Sem Dados"
                );
        }

        $funcao = $this->model_main->get ($select = array("*"), $from= "sec_funcao", $condicao = array());

        if($funcao)
        {
            foreach ($funcao as $key)
            {
                $data['BLC_FUNCAO'][] = array(
                    
                    "CODFUNCAO"  =>$key->FuncaoID,
                    "FUNCAO"     =>$key->Funcao
                );
            }
        } else
        {
            $data['BLC_FUNCAO'][] = array(
                "CODFUNCAO"  =>"",
                "FUNCAO"     =>"Sem Dados"
            );
        }

        $Procedencia = $this->model_main->get ($select = array("*"), $from= "sec_procedenciamembro", $condicao = array());

        if($Procedencia)
        {
            foreach ($Procedencia as $key)
            {
                $data['BLC_PROCEDENCIA'][] = array(
                    
                    "CODPROCEDENCIA"  =>$key->ProcedenciaID,
                    "PROCEDENCIA"     =>$key->Procedencia
                );
            }
        } else
        {
            $data['BLC_PROCEDENCIA'][] = array(
                "PROCEDENCIA"     =>"Sem Dados"
            );
        }

        $OrgaoEmissor = $this->model_main->get ($select = array("*"), $from= "sec_orgaoemissoridentidade", $condicao = array());

        if($OrgaoEmissor)
        {
            foreach ($OrgaoEmissor as $key)
            {
                $data['BLC_EMISSOR'][] = array(

                    "CODEMISSOR"  =>$key->OrgaoID,
                    "EMISSOR"     =>$key->OrgaoEmissor
                );
            }
        } else
        {
            $data['BLC_EMISSOR'][] = array(
                "EMISSOR"     =>"Sem Dados"
            );
        }


        $this->layout = 'dashboard';
		$this->parser->parse('secretaria/cadastroMembros_form', $data);

	}

    public function Salvar()
    { 
        $this->load->model('cadastro_membro_model');
        $this->load->model('model_main');

        $erro = false;

        $CodMembro          = $this->input->post ('CodMembro');
        $NomeMembro         = $this->input->post ('NomeMembro');
        $DataNascimento     = $this->input->post ('DataNascimento');
        $EstadoNaturalidade = $this->input->post ('EstadoNaturalidade');
        $SexoMembro         = $this->input->post ('SexoMembro');
        $Logradouro         = $this->input->post ('Logradouro');
        $Numero             = $this->input->post ('Numero');
        $Bairro             = $this->input->post ('Bairro');
        $Cidade             = $this->input->post ('Cidade');
        $Cep                = $this->input->post ('Cep');
        $EstadoLogadrouro   = $this->input->post ('EstadoLogadrouro');
        $NomePai            = $this->input->post ('NomePai');
        $NomeMae            = $this->input->post ('NomeMae');
        $EstadoCivil        = $this->input->post ('EstadoCivil');
        $Conjuge            = $this->input->post ('Conjuge');
        $DataCasamento      = $this->input->post ('DataCasamento');
        $Telefone           = $this->input->post ('Telefone');
        $Email              = $this->input->post ('Email');
        $cpfMembro          = $this->input->post ('cpfMembro');
        $IdentidadeMembro   = $this->input->post ('Identidade');
        $DataEmissao        = $this->input->post ('DataEmissao');
        $OrgaoEmissor       = $this->input->post ('OrgaoEmissor');

        if (!$NomeMembro && !$DataNascimento && !$SexoMembro && !$Cidade)
        {
            $erro = true;
        }

        if (!$cpfMembro && !$IdentidadeMembro)
        {
            $erro = true;
        }
        if(empty($DataCasamento))
        {
            $DataCasamento = null;
        }
        if(empty($DataEmissao))
        {
            $DataEmissao = null;
        }
        if(empty($OrgaoEmissor))
        {
            $OrgaoEmissor = null;
        }
        if ($NomeMembro)
        {
            $nome = $this->model_main->get(array("*"), $from = "sec_membro", array("NomeMembro" => $NomeMembro));

            if($nome)
            {
                $erro = true;
                $valida = "Valida-Nome";
            }
        }
        if($cpfMembro)
        {
            $cpf = $this->model_main->get(array("*"), $from= "sec_membro", array("cpfMembro" => $cpfMembro));

            if($cpf)
            {
                $erro = true;
                $valida = "Valida-CPF";
            }
        }
        if($IdentidadeMembro)
        {
            $rg = $this->model_main->get(array("*"), $from= "sec_membro", array("IdentidadeMembro" => $IdentidadeMembro));

            if($rg)
            {
                $erro = true;
                $valida = "Valida-RG";
            }
        }
        if($cpf && $rg)
        {
            $valida = "ValidaDoc";
        }

        if (!$erro)
        {

            $itens = array (

                "NomeMembro"            => $NomeMembro,
                "DataNascimento"        => $DataNascimento,
                "EstadoNaturalidade"    => $EstadoNaturalidade,
                "SexoMembro"            => $SexoMembro,
                "Logradouro"            => $Logradouro,
                "Numero"                => $Numero,
                "Bairro"                => $Bairro,
                "Cidade"                => $Cidade,
                "Cep"                   => $Cep,
                "EstadoLogadrouro"      => $EstadoLogadrouro,
                "NomePai"               => $NomePai,
                "NomeMae"               => $NomeMae,
                "EstadoCivil"           => $EstadoCivil,
                "Conjuge"               => $Conjuge,
                "DataCasamento"         => $DataCasamento,
                "Email"                 => $Email,
                "cpfMembro"             => $cpfMembro,
                "IdentidadeMembro"      => $IdentidadeMembro,
                "DataEmissao"           => $DataEmissao,
                "Cod_OrgaoEmissor"      => $OrgaoEmissor
            );

            if ($CodMembro)
            {
                
                $resposta =  $this->cadastro_membro_model->update($itens, $CodMembro);

                if ($resposta)
                {
                    $mensagem = "Atualizado";

                } else
                {
                    $mensagem = "Error-atualizacao";
                }
            } else
            {
                $from = "sec_membro";
                $return = $this->cadastro_membro_model->post($from, $itens);

                if($return)
                {
                    $mensagem = "sucesso";
                    $this->session->set_userdata('codigo',$return);

                } else
                {
                    $mensagem = "Error-cadastro";
                }
            }

        } else
        {

            switch ($valida)
            {
                case "Valida-Nome":
                    $mensagem = "ValidaNome";
                    break;

                case "Valida-CPF":
                    $mensagem = "ValidaitonCpf";
                    break;

                case "Valida-RG":
                    $mensagem = "ValidationRG";
                    break;

                case "ValidaDoc":
                    $mensagem = "ValidaDoc";
                    break;

                default:
                    $mensagem = "Erro-validation";
            }
        }

        echo json_encode($mensagem);

    }

    public function SalvarEclesia()
    {

        $this->load->model('cadastro_membro_model');

        $IDMembro = $this->session->userdata('codigo');

        $DadosEclesiaID            = "";
        $error = false;

        $CodMembro                 = $this->input->post('CodMembro');
        $RolMembro                 = $this->input->post('RolMembro');
        $CargoMembro               = $this->input->post('CargoMembro');
        $FuncaoMembro              = $this->input->post('FuncaoMembro');
        $BatismoAguas              = $this->input->post('BatismoAguas');
        $IgrejaBatismoAguas        = $this->input->post('IgrejaBatismoAguas');
        $DataBatismoAguas          = $this->input->post('DataBatismoAguas');
        $BatismoEspiritoSanto      = $this->input->post('BatismoEspiritoSanto');
        $DataBatismoEspiritoSanto  = $this->input->post('DataBatismoEspiritoSanto');
        $DescricaoProcedencia      = $this->input->post('DescricaoProcedencia');
        $LotacaoMembro             = $this->input->post('LotacaoMembro');
        $TipoMembro                = $this->input->post('TipoMembro');
        $SituacaoCadastral         = $this->input->post('SituacaoCadastral');
        $Procedencia               = $this->input->post('Procedencia');

        if (!$LotacaoMembro || !$TipoMembro || !$SituacaoCadastral || !$Procedencia || !$IDMembro)
        {
            $error = true;
        }

        if(empty($DataBatismoAguas))
        {
            $DataBatismoAguas = null;
        }
        if(empty($DataBatismoEspiritoSanto))
        {
            $DataBatismoEspiritoSanto = null;
        }
        if(empty($CargoMembro))
        {
            $CargoMembro = null;
        }
        if(empty($FuncaoMembro))
        {
            $FuncaoMembro = null;
        }

        if (!$error)
        {
            $itens = array(

                "Cod_membro" => $IDMembro,
                "RolMembro" => $RolMembro,
                "Cod_Cargo" => $CargoMembro,
                "Cod_Funcao" => $FuncaoMembro,
                "BatismoAguas" => $BatismoAguas,
                "IgrejaBatismo" => $IgrejaBatismoAguas,
                "DataBatismoAguas" => $DataBatismoAguas,
                "BatismoEspiritoSanto" => $BatismoEspiritoSanto,
                "DataBatismoEspiritoSanto" => $DataBatismoEspiritoSanto,
                "DescricaoProcedencia" => $DescricaoProcedencia,
                "Cod_Lotacao" => $LotacaoMembro,
                "TipoMembro" => $TipoMembro,
                "SituacaoCadastral" => $SituacaoCadastral,
                "Cod_Procedencia" => $Procedencia
            );

            if($DadosEclesiaID)
            {

                $resposta =  $this->cadastro_membro_model->update($itens, $CodMembro);

                if ($resposta)
                {
                    $retorno = "Atualizado";

                    $this->dados = $resposta;

                } else
                {
                    $retorno = "Error-atualizacao";
                }
            } else
            {
                $from = "sec_membro_dados_eclesia";
                $return = $this->cadastro_membro_model->post($from, $itens);

                if($return)
                {
                    $retorno = "sucesso";

                } else
                {
                    $retorno = "Error-cadastro";
                }
            }

        } else
        {
            $retorno = "Erro-validation";
        }

        echo json_encode($retorno);
        $this->session->unset_userdata("codigo");

    }

    public function UploadFoto()
    {
        $this->load->model('cadastro_membro_model');
        $this->load->model('model_main');

        $error = false;
        $retorno = [];

        $IDMembro                  = $this->session->userdata('codigo');

        $Foto = $_FILES['imageFoto'];
        if ($Foto)
        {
            $path = "assets/img/FotoMembros/";

            $Name  = $Foto['name'][0];

            $Extension = array('gif', 'png', 'jpg', 'jpeg');

            //$Namefoto = end(explode('.', $Namefoto));

            $Nome = explode(".",$Name);
            $Namefoto = $Nome[1];

            $nomeFoto = $IDMembro.".".$Namefoto;

            if(in_array($Namefoto, $Extension))
            {
               if(is_uploaded_file($Foto['tmp_name'][0]))
               {
                   if(move_uploaded_file($Foto['tmp_name'][0], $path.$nomeFoto))
                   {
                       $itens = array("FotoMembro" => $nomeFoto);

                       $update = $this->cadastro_membro_model->update($itens, $IDMembro);

                       if($update > 0)
                       {
                           $retorno     = ['uploaded' => $nomeFoto];   //['error'] = "falha ao salvar foto";
                       }else
                       {
                           $retorno['s'] = "error-update";
                       }

                   }else
                   {
                       $error = true;
                   }
               }else
               {
                   $error = true;
               }
            }else
            {
                $error = true;
            }

            if($error == true)
            {
                $retorno['e'] = "error";
            }
        }else
        {
            $retorno['e'] =  "Error-foto";
        }

        $info = [];
        $initial = [];

        $arr = array("file_id" =>0, "overwriteInitial" =>true, "initialPreviewConfig"=>$info, "initialPreview" =>$initial, "response"=>"deu certo");

        echo json_encode($arr);

    }

}