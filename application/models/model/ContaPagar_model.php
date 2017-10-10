<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ContaPagar_model extends CI_Model {

	public function get ($condicao = array(), $primeiraLinha = FALSE, $pagina = 0){
		$this->db->select('*');
		$this->db->join('tesouro_fornecedor', 'FornecedorID = Cod_Fornecedor');
        $this->db->join('sec_igreja', 'IgrejaID = Lotacao');
        $this->db->join('tesouro_tipodocumento', 'TipoDocumentoID = tesouro_contapagar.TipoDocumento');
        $this->db->join('financ_planoconta', 'PlanoContaID = Cod_PlanoConta');
		$this->db->where($condicao);
		$this->db->from ('tesouro_contapagar');

		if ($primeiraLinha) {
			return $this->db->get()->first_row();
		} else {
			$this->db->limit (30, $pagina);
			return $this->db->get() ->result();
		}
	}
	public function get_Valores ($condicao = array(), $primeiraLinha = FALSE, $pagina = 0){
		$this->db->select_sum('ValorParcela');
		$this->db->select('IgrejaLotacao');
		$this->db->join('tesouro_fornecedor', 'FornecedorID = Cod_Fornecedor');
        $this->db->join('sec_igreja', 'IgrejaID = Lotacao');
        $this->db->join('tesouro_tipodocumento', 'TipoDocumentoID = tesouro_contapagar.TipoDocumento');
        $this->db->join('financ_planoconta', 'PlanoContaID = Cod_PlanoConta');
		$this->db->group_by('Lotacao');
		$this->db->from ('tesouro_contapagar');

		if ($primeiraLinha) {
			return $this->db->get()->first_row();
		} else {
			$this->db->limit (30, $pagina);
			return $this->db->get() ->result();
		}
	}
	
	public function post($itens) {
		$res = $this->db->insert ('tesouro_contapagar', $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($ContaPagarID){

	    if ($ContaPagarID == null) {
	        return FALSE;
        } else {
            $this->db->where('ContaPagarID', $ContaPagarID, FALSE);
            return $this->db->delete ('tesouro_contapagar');
        }
	}

	public function update ($itens, $ContaPagarID) {
		$this->db->where('ContaPagarID', $ContaPagarID, FALSE);
		$this->db->set($itens);
		$res = $this->db->update ('tesouro_contapagar', $itens);

		if ($res) {
			return $inputID;
		} else {
			return FALSE;
		}
	}
}