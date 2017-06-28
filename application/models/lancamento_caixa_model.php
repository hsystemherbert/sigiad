<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lancamento_caixa_model extends CI_Model {

	public function get ($condicao = array(), $primeiraLinha = FALSE, $pagina = 0){
		$this->db->select('*');
		$this->db->join('sec_igreja', 'IgrejaID = Cod_Lotacao');
		$this->db->join('financ_planoconta', 'PlanoContaID = Cod_Contabil');
		$this->db->where($condicao);
		$this->db->from ('financ_lancamentocaixa');

		if ($primeiraLinha) {
			return $this->db->get()->first_row();
		} else {
			return $this->db->get() ->result();
		}
	}
    public function get_valores ($condicao = array(), $primeiraLinha = FALSE, $pagina = 0){
        $this->db->select_sum('ValorLancamento');
        $this->db->select('Movimento');
        $this->db->group_by('Movimento');
        $this->db->from ('financ_lancamentocaixa');
        
        return $this->db->get() ->result();
    }
    public function get_lotacao ($condicao = array(), $primeiraLinha = FALSE, $pagina = 0){
        $this->db->select('IgrejaLotacao, SUM(CASE WHEN Movimento = "1" THEN ValorLancamento ELSE 0 END) AS ValorEntrada, SUM(CASE WHEN Movimento = "2" THEN ValorLancamento ELSE 0 END) AS ValorSaida');
		$this->db->join('sec_igreja', 'IgrejaID = Cod_Lotacao','left');
		$this->db->group_by('Cod_Lotacao');
        $this->db->from ('financ_lancamentocaixa');
        
        return $this->db->get() ->result();
    }
	
	public function post($itens) {
		$res = $this->db->insert ('financ_lancamentocaixa', $itens);

		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function excluir ($AdmissaoID){
		$this->db->where('AdmissaoID', $AdmissaoID, FALSE);
		return $this->db->delete ('sec_admissao');
	}

	public function update($itens, $AdmissaoID) {
		$this->db->where('AdmissaoID', $AdmissaoID, FALSE);
		$this->db->set('AdmissaoDescricao');
		$res = $this->db->update ('sec_admissao', $itens);

		if ($res) {
			return $AdmissaoID;
		} else {
			return FALSE;
		}
	}
}