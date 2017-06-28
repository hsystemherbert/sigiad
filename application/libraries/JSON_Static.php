<?php
/**
 *	FVAL PHP Framework for Web Applications\n
 *	Copyright (c) 2007-2013 FVAL Consultoria e Informática Ltda.\n
 *	Copyright (c) 2007-2013 Fernando Val\n
 *	Copyright (c) 2009-2013 Lucas Cardozo
 *
 *	\warning Este arquivo é parte integrante do framework e não pode ser omitido
 *
 *	\version 1.0.0
 *
 *	\brief Classe stática para tratamento JSON
 */

class JSON_Static {
	private static $defaultVars = array();
	
	/**
	 *	\brief Método statico que adiciona uma variável a todas as instancias do JSON
	 */
	public static function addDefaultVar($name, $value) {
		JSON_Static::$defaultVars[$name] = $value;
	}
	
	/**
	 *	\brief Método statico que retorna todas as variáveis registradas
	 *
	 * @return Array
	 */
	public static function getDefaultVars() {
		return self::$defaultVars;
	}
	
	/**
	 *	\brief Método statico que retorna uma variável definida como padrão a todas as instancias da Template
	 *
	 * @param[in] String $name
	 *
	 * @return mixed
	 */
	public static function getDefaultVar($name) {
		return (isset(JSON_Static::$defaultVars[$name]) ? JSON_Static::$defaultVars[$name] : NULL);
	}
}