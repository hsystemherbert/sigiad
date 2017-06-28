<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function login($loginuser, $senhauser)
    {
        $query = $this->db->query("SELECT usu.idUsuario, usu.login, usu.password, usu.nome, usu.foto, setor.nome as NomeSetor
            FROM adm_usuario AS usu
            INNER JOIN adm_setores AS setor on usu.idSetor = setor.idSetor
            where usu.login = '$loginuser' AND usu.password = '$senhauser'");
        
        return $query->result();
    }
    
    public function PermissaoUsuario($idUsuario)
    {
        $query = $this->db->query("SELECT stp.idPagina, pag.nome, pag.uri, pag.mostraMenu, pgr.nome AS nomeGrupo, pgr.icone, setor.nome AS setor FROM adm_setores_paginas AS stp INNER JOIN adm_usuario AS usu ON usu.idSetor = stp.idSetor AND usu.idUsuario = '$idUsuario' INNER JOIN adm_paginas AS pag ON pag.idPagina = stp.idPagina INNER JOIN adm_paginas_grupos AS pgr ON pgr.idPaginaGrupo = pag.idPaginaGrupo INNER JOIN adm_setores AS setor ON usu.idSetor = setor.idSetor ORDER BY stp.idPagina");
        
        return $query->result();

    }
    public function PaginaGrupo()
    {
        $this -> db -> select('*');
        $this -> db -> from('adm_paginas_grupos');

        $query = $this -> db -> get();
        return $query->result();
    }

    public function setorUsuario()
    {
        $this -> db -> select('*');
        $this -> db -> from('adm_usuario');

        $query = $this -> db -> get();
        return $query->result();
    }
}