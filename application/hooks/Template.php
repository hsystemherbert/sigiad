<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Template {
		
		public function init() { 
			
			$CI = &get_instance(); 

			$output = $CI->output->get_output(); 

			$html = $output; 

				if (isset($CI->layout)) { 
					if ($CI->layout) {


						$erroDash		= $CI->session->flashdata('erro');
						$sucessoDash	= $CI->session->flashdata('Sucesso');
						$logado         = $CI->session->userdata('login');
						

						if (!preg_match('/(.+).php$/', $CI->layout)) { 
							$CI->layout .= '.php'; 
						} 
				$template = APPPATH . 'templates/' . $CI->layout; 

						if (file_exists($template)) { 
							$layout = $CI->load->file($template, TRUE); 
							$html = str_replace("{CONTEUDO}",$output, $layout);
						if ($logado)
                        {
                            $idUsuario = $logado['log']['idUsuario'];
                            $html = str_replace("{ID}", $idUsuario, $html);
                        }
						if ($logado)
                        {
                            $nome = $logado['log']['nome'];
                            $html = str_replace("{NOME}", $nome, $html);
                        }
                        if ($logado)
                        {
                            $foto = $logado['log']['foto'];
                            $html = str_replace("{FOTO}", $foto, $html);
                        }
                        if ($logado)
                        {
                            $setor = $logado['log']['setor'];
                            
                            if($setor == "Administrador"){
                            	$setor = "Adm";
                            }
                            $html = str_replace("{SETOR}", $setor, $html);
                        }

                        // if ($logado)
                        // {
                        // 	$pagina = $logado['menu'];
                        // 	$pag_grupo = $logado['grupo'];
                        // 	$menu = $this->ChamaMenu($pagina,$pag_grupo);
                        // 	$html = str_replace("{BLC_DADOS}", $menu, $html);
							
                        // }

						
						if ($erroDash)
						{
							$erroDash = $this->criaAlerta ($erroDash, 'alert-danger', 'OPS');
							$html = str_replace("{MENSAGEM_SISTEMA_ERRO}", $erroDash, $html);
						} else
                        {
							$html = str_replace("{MENSAGEM_SISTEMA_ERRO}", null, $html);
						}
						if ($sucessoDash)
						{
							$sucessoDash = $this->criaAlerta ($sucessoDash, 'alert-success', 'OK');
							$html = str_replace("{MENSAGEM_SISTEMA_SUCESSO}", $sucessoDash, $html);
						} else
                        {
							$html = str_replace("{MENSAGEM_SISTEMA_SUCESSO}", null, $html);
						}


						} else {
							die('Template inválida.'); 
						} 
					} 
				} 
				
				$CI->output->_display($html); 
		}

		private function criaAlerta ($mensagem, $tipo, $titulo) {
			
			$html  = "<div id =\"page-wrapper\">\n";
			$html .= "\t<div id=\"page-inner\">\n";
			$html .= "\t<div class=\"alert {$tipo}\">\n";
			$html .= "\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>\n";
			$html .= "\t<strong>{$titulo}!</strong>&nbsp {$mensagem}\n";
			$html .= "\t</div>";
			$html .= "\t</div>";
			$html .= "</div>";
			return $html;
		}

		private function ChamaMenu ($pagina, $pag_grupo) {

		

		$pagina_permissao = $pagina;
        $grupo            = $pag_grupo;
        $pagina_array = array();
        $grupo_array  = array();
        $error = false;
        $html = "";
        
        if ($pagina_permissao){
            for ( $i = 0; $i < count($pagina_permissao); $i++ ) {
                $pagina_array[] = get_object_vars($pagina_permissao[$i]);
            }
        } else {
            $error = true;
        }

        if($grupo){
            $grupo_arr   = array();
            $grupo_ordem = array();
            
            foreach ($grupo as $key => $value) {
                $grupo_arr[] = $value->ordem;
            }

            asort($grupo_arr);

            foreach ($grupo_arr as $key => $value) {
                $grupo_ordem[]  = $grupo[$key];
            }

            for ( $x = 0; $x < count($grupo_ordem); $x++) {
                $grupo_array[] = get_object_vars($grupo_ordem[$x]);
            }
        } else {
            $error = true;
        }

        // Organizando o menu

        if($error == true){

        } else {

            $html  = "<div id=\"menuSite\">\n";
			$html .= "<ul class=\"nav nav-list\">\n";

            for ( $z = 0, $f = 1; $z < count($grupo_array); $z++, $f++) {

                if ($grupo_array[$z]['ordem'] == $f){
                	

                    $Grupo_pagina = $grupo_array[$z]['nome'];
                    
                    $html .= "<li class=\"open hover\">";
					$html .= "<a href=\"#\" class=\"dropdown-toggle\" id=\"btn_menu\">\n";
					$html .= "<i class=\"menu-icon fa ".$grupo_array[$z]['icone']."\"></i>\n";
					$html .= "<span class=\"menu-text\">\n";	
					$html .= $grupo_array[$z]['nome'];	
					$html .= "</span>\n";	
					$html .= "<b class=\"arrow fa fa-angle-down\"></b>\n";	
					$html .= "</a>\n";	
					$html .= "<b class=\"arrow\"></b>\n";

                }else{
                    echo "<li>grupo ordem não igual</li>";
                }

                $html .= "<ul class=\"submenu\">\n";

                for ( $y = 0; $y < count($pagina_array); $y++) {
                    
                    if ($pagina_array[$y]['nomeGrupo'] == $Grupo_pagina){
                        if ($pagina_array[$y]['mostraMenu'] == 0){
                        	$html .= "<li class=\"open hover\">\n";	
							$html .= "<a href=\"#\" class=\"dropdown-toggle\" name=\"Layouts\">\n";	
							$html .= "<i class=\"menu-icon fa fa-caret-right\"></i>\n";	
							$html .= $pagina_array[$y]['nome'];	
							$html .= "<b class=\"arrow fa fa-angle-down\"></b>\n";	
							$html .= "</a>\n";
							$html .= "</li>\n";
                        } else {
                        	$html .= "<li class=\"open hover\">\n";	
							$html .= "<a href=\"\" onclick=\"URLmenu('".$pagina_array[$y]['uri']."')\" class=\"dropdown-toggle\" name=\"Layouts\">\n";
							$html .= $pagina_array[$y]['nome'];
							$html .= "</a>\n";
							$html .= "</li>\n";
                        }

                    	
                    	
                    }
                }
                $html .= "</ul>\n";
                $html .= "</li>\n";
	               
            }
            $html .= "</ul>\n";
			$html .= "</div>\n";
           
        }
	// $html .= "<b class=\"arrow\"></b>\n";	
	// $html .= "<ul class=\"submenu\">\n";	
	// $html .= "<li class=\"active hover\">\n";
	// $html .= "<a href=\"#\" name=\"top-menu.html\">\n";
	// $html .= "<i class=\"menu-icon fa fa-caret-right\"></i>\n";
	// $html .= "Top Menu\n";
	// $html .= "</a>\n";
	// $html .= "<b class=\"arrow\"></b>\n";
	// $html .= "</li>\n";
	// $html .= "</ul>\n";
	
	

		return $html;

		}
        
    }