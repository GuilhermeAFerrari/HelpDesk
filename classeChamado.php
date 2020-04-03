<?php
class classeChamado{

    private $id_chamado;
	private $ds_status;
    private $ds_chamado;
    private $ds_prioridade;
    private $ds_resolucao;
    private $id_pessoa;
    public function __construct($ds_status, $ds_chamado, $ds_prioridade, $ds_resolucao, $id_pessoa, $id_chamado) {
		$this->ds_status = $ds_status;
		$this->ds_chamado = $ds_chamado;
		$this->ds_prioridade = $ds_prioridade;
		$this->ds_resolucao = $ds_resolucao;
		$this->id_pessoa = $id_pessoa;
		$this->id_chamado = $id_chamado;
    }

    public function get_id_chamado() {
        return $this->id_chamado;
    }
	
	public function get_ds_status() {
        return $this->ds_status;
    }

    public function get_ds_chamado() {
        return $this->ds_chamado;
    }
	
	public function get_ds_prioridade() {
        return $this->ds_prioridade;
    }

    public function get_ds_resolucao() {
        return $this->ds_resolucao;
    }
	
	public function get_id_pessoa() {
        return $this->id_pessoa;
    }

    public function set_id_chamado($id_chamado) {
        $this->id_chamado = $id_chamado;
    }
	
	public function set_ds_status($ds_status) {
        $this->ds_status = $ds_status;
    }

    public function set_ds_chamado($ds_chamado) {
        $this->ds_chamado = $ds_chamado;
    }

    public function set_ds_prioridade($ds_prioridade) {
        $this->ds_prioridade = $ds_prioridade;
    }

    public function set_ds_resolucao($ds_resolucao) {
        $this->ds_resolucao = $ds_resolucao;
    }

    public function set_id_pessoa($id_pessoa) {
        $this->id_pessoa = $id_pessoa;
    }

}

?>