<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *	FVAL PHP Framework for Web Applications\n
 *	Copyright (c) 2007-2013 FVAL Consultoria e Informática Ltda.\n
 *	Copyright (c) 2007-2013 Lucas Cardozo
 *
 *	\warning Este arquivo é parte integrante do framework e não pode ser omitido
 *
 *	\version 0.1.0
 *
 *	\brief Classe de construção e tratamento de objetos JSON
 *
 *	Esta classe foi adicionada ao framework por seu autor.
 */

class JSON {
	private $dados = array();
	private $headerStatus = 200;
	
	public function __construct() {
		header('Content-type: application/json; charset=UTF-8', true, $this->headerStatus);
	}
	
	public function add($dados) {
		$this->dados = array_merge($this->dados, $dados);
	}
	
	public function getDados() {
		return $this->dados;
	}
	
	public function setHeaderStatus($status) {
		$this->headerStatus = $status;
		header('Content-type: application/json; charset=UTF-8', true, $this->headerStatus);
		header( 'Expires: Sat, 26 Jul 1997 05:00:00 GMT' ); 
		header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' ); 
		header( 'Cache-Control: no-store, no-cache, must-revalidate' ); 
		header( 'Cache-Control: post-check=0, pre-check=0', false ); 
		header( 'Pragma: no-cache' );
        header( 'Access-Control-Allow-Origin: *'); 
	}
	
	public function fetch() {
		foreach (JSON_Static::getDefaultVars() as $name => $value) {
			if (!isset($this->dados[$name])) {
				$this->dados[$name] = $value;
			}
		}
		
		return json_encode($this->dados);
	}
	
	public function printJ($andDie=true) {

		
		//ob_clean();
		ob_end_clean();
		ob_start( 'ob_gzhandler'  );
		
		echo $this->fetch();
		
		ob_end_flush();
		
		if ($andDie) {
			die;
		}
	}

}