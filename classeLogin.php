<?php
class classeLogin{
   private $id_login;
   private $nm_login;
   private $ds_senha;
   private $id_pessoa;
   
   public function __construct($nm_login, $ds_senha, $id_pessoa,$id_login)
   {
	 $this->nm_login = $nm_login;
	 $this->ds_senha = $ds_senha;
     $this->id_pessoa = $id_pessoa;
	 $this->id_login = $id_login;
   }
   
   public function get_id_login() {
        return $this->id_login;
    }

    public function get_nm_login() {
        return $this->nm_login;
    }
	
	public function get_ds_senha() {
        return $this->ds_senha;
    }

    public function get_id_pessoa() {
        return $this->id_pessoa;
    }
	
	public function set_id_login($id_login) {
        $this->id_login = $id_login;
    }

    public function set_nm_login($nm_login) {
        $this->nm_login = $nm_login;
    }

    public function set_ds_senha($ds_senha) {
        $this->ds_senha = $ds_senha;
    }

    public function set_id_pessoa($id_pessoa) {
        $this->id_pessoa = $id_pessoa;
    }
}
?>