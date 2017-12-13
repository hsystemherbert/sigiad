<?php

    class My_Controller extends CI_Controller {

        function __construct()
        {
            parent::__construct();

            $logado = $this->session->userdata('login');

            if (!isset($logado['log']['nome']))
            {
                redirect(base_url('painel/Login'));
            }

        }

        public function AtivaCaixa($Ativa = "")
        {
            
            $this->load->model('Ativa_model');

            $Ativacao = $Ativa;

            $AtivaCaixa = $this->Ativa_model->get_ativo();

            if ($AtivaCaixa){
                
                foreach ($AtivaCaixa as $r) {
                    $AtivaCaixaID   = $r->AtivaCaixaID;
                    $MesAtivo       = $r->CaixaMes;
                    $CaixaValor     = $r->CaixaValor;
                    $CaixaAtivo     = $r->CaixaAtivo;
                }

                switch ($Ativacao) {
                    case 'CaixaAtivo':
                        $CaixaAtivo = array("CaixaAtivado" =>"CaixaAtivado", "AtivaCaixaID" =>$AtivaCaixaID, "MesAtivo" => $MesAtivo);
                        return $CaixaAtivo;
                        break;
                    
                    default:
                        return $AtivaCaixa;
                        break;
                }


            } else {

                switch ($Ativacao) {
                    case 'CaixaAtivo':
                        $CaixaAtivo = "CaixaDesativado";
                        return $CaixaAtivo;
                        break;
                    
                    default:
                        redirect('painel/Principal','refresh');
                        break;
                }
            }
        }

        public function ValoresCaixa()
        {
            $this->load->model('Ativa_model');
            $this->load->model('lancamento_caixa_model');

            $MesAtivo = $this->Ativa_model->get();

            if ($MesAtivo) {
                foreach ($MesAtivo as $r) {
                    $ValorAtivo  = $r->CaixaValor;
                }
            }

            $Caixa = array();
            $Caixa['VALOR'] =array();

            $ValorCaixa = $this->lancamento_caixa_model->get_valores();
            
            return $ValorCaixa;
        }
    }