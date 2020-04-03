<?php
class classePessoa{

    private $id_pessoa;
    private $nm_nome;
    private $nr_cpf;
    private $nr_rg;
    private $nm_departamento;
	private $nr_telefone;
    private $nm_email;
	private $ds_tipo;
	private $ds_status;

    public function __construct($nm_nome, $nr_cpf, $nr_rg, $nm_departamento, $nr_telefone, $nm_email, $ds_tipo, $ds_status, $id_pessoa) {
		$this->nm_nome = $nm_nome;
		$this->nr_cpf = $nr_cpf;
		$this->nr_rg = $nr_rg;
		$this->nm_departamento = $nm_departamento;
		$this->nr_telefone = $nr_telefone;
		$this->nm_email = $nm_email;
		$this->ds_tipo = $ds_tipo;
		$this->ds_status = $ds_status;
		$this->id_pessoa = $id_pessoa;
    }

    public function get_id_pessoa() {
        return $this->id_pessoa;
    }

    public function get_nm_nome() {
        return $this->nm_nome;
    }

    public function get_nr_cpf() {
        return $this->nr_cpf;
    }
	
	public function get_nr_rg() {
        return $this->nr_rg;
    }

    public function get_nm_departamento() {
        return $this->nm_departamento;
    }
	
	public function get_nr_telefone() {
        return $this->nr_telefone;
    }
	
	public function get_nm_email() {
        return $this->nm_email;
    }
	
	public function get_ds_tipo() {
        return $this->ds_tipo;
    }
	
	public function get_ds_status() {
        return $this->ds_status;
    }

    public function set_id_pessoa($id_pessoa) {
        $this->id_pessoa = $id_pessoa;
    }

    public function set_nm_nome($nm_nome) {
        $this->nm_nome = $nm_nome;
    }

    public function set_nr_cpf($nr_cpf) {
        $this->nr_cpf = $nr_cpf;
    }
	
	public function set_nr_rg($nr_rg) {
        $this->nr_rg = $nr_rg;
    }

    public function set_nm_departamento($nm_departamento) {
        $this->nm_departamento = $nm_departamento;
    }
	
	public function set_nr_telefone($nr_telefone) {
        $this->nr_telefone = $nr_telefone;
    }
	
	public function set_nm_email($nm_email) {
        $this->nm_email = $nm_email;
    }
	
	public function set_ds_tipo($ds_tipo) {
        $this->ds_tipo = $ds_tipo;
    }
	
	public function set_ds_status($ds_status) {
        $this->ds_status = $ds_status;
    }
}

?>
