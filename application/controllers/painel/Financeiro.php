<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Financeiro extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        //$sess_caixa = $this->session->flashdata('AtivarMesCaixa');

        $this->load->model('ContaPagar_model');
        //$this->load->model('lancamento_caixa_model');

        $data                       = array();

        //$data['TESTE']              = $sess_caixa;

        $data['BLC_CONTAPAGAR']       = array();
        $data['BLC_VALOR']            = array();
        $data['BLC_VALOR_TOTAL']      = array();
        $data['BLC_MES_ATIVO']        = array();
        $data['BLC_SEM_MES_ATIVO']    = array();

        // $Ativacaixa = $this->Ativacaixa();

        // if ($Ativacaixa) {
        //     foreach ($Ativacaixa as $r) {
        //         $MesAtivo       = $r->CaixaMes;
        //         $ValorInit      = $r->CaixaValor;
        //     }
       
        // $data['MES_ATIVO']           = $MesAtivo;
        // $data['VALOR_CAIXA_INIT']    = $ValorInit;

        // $Lancamentos    = $this->lancamento_caixa_model->get_lotacao();

       
        // $ValorT             = 0;
        // $ValorEntrada       = 0;
        // $Valor_TE           = 0;
        // $ValorSaida         = 0;
        // $Valor_TS           = 0;
        // $ValorTL            = 0;

        // if ($Lancamentos) {
        //     foreach ($Lancamentos as $r) {
        //         $ValorEntrada          = $r->ValorEntrada;
        //         $ValorSaida            = $r->ValorSaida;

              
        //         $Valor_TE = $Valor_TE + $ValorEntrada;
        //         $Valor_TS = $Valor_TS + $ValorSaida;
               
                
        //         $ValorE       = "R$ " .number_format($ValorEntrada,2, ",",".");
        //         $ValorS       = "R$ " .number_format($ValorSaida, 2, ",",".");
                
        //         $ValorTL      = $ValorEntrada - $ValorSaida;
        //         $ValorT_LOT   = "R$ " .number_format($ValorTL, 2, ",", ".");
                


        //         $data['BLC_VALOR'] [] = array(
        //             "LOTACAO"        => $r->IgrejaLotacao,
        //             "VALOR_ENTRADA"  => $ValorE,
        //             "VALOR_SAIDA"    => $ValorS,
        //             "VALOR_TOTAL"    => $ValorT_LOT
        //         );
        //     }

        //     $ValorT  = ($ValorInit + $Valor_TE) - $Valor_TS;
        //     $ValorTotal   = "R$ " .number_format($ValorT, 2, ",",".");

        //     $Valor_E = "R$ " .number_format($Valor_TE, 2, ",",".");
        //     $Valor_S = "R$ " .number_format($Valor_TS, 2, ",",".");

        //     $data['BLC_VALOR_TOTAL'] [] = array(

        //         "VALOR_TE"       => $Valor_E,
        //         "VALOR_TS"       => $Valor_S,
        //         "VALOR_TOTAL"    => $ValorTotal
        //         );
        // }

        // $Valor_DZ = 0;
        // $Valor_OF = 0;

        // $ValorDizimo    = "R$ " .number_format($Valor_DZ, 2, ",", ".");
        // $ValorOferta    = "R$ " .number_format($Valor_OF, 2, ",", ".");

        // $data['VALOR_DIZIMOS']      = $ValorDizimo;
        // $data['VALOR_OFERTAS']      = $ValorOferta;
        // $data['VALOR_ENTRADA']      = $Valor_E;
        // $data['VALOR_SAIDA']        = $Valor_S;
        // $data['VALOR_CAIXA']        = $ValorTotal;

        // }else
        // {
        //     $data['BLC_SEM_MES_ATIVO'] [] = array();
        // }

        // $ContaPagar  = $this->ContaPagar_model->get();

        // if ($ContaPagar) {
        //     foreach ($ContaPagar as $r) {

        //         $data['BLC_CONTAPAGAR'] [] = array(
        //             "COD"           => $r->ContaPagarID,
        //             "LOTACAO"       => $r->IgrejaLotacao,
        //             "PLANOCONTA"    => $r->PlanoDescricao,
        //             "VENCIMENTO"    => $r->DataVencimento,
        //             "VALOR"        => $r->ValorParcela
        //         );
        //     }
        // }


        $this->layout = 'dashboard';
        $this->parser->parse('painel/financeiro',$data);

    }
}