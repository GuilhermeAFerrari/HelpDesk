<?php

include_once "classePessoa.php";
include_once "classeConexao.php";

class PessoaClassDao{

    public function inserirPessoa(classePessoa $pes) {
	  try{
		  print "Chegou no DAO";
	    $conec = conec::conecta_mysql("localhost","root","","db_contatos");
        $insert = $conec->prepare("INSERT INTO tb_pessoa(nm_pessoa, nr_cpf, nr_rg, nm_departamento,nr_telefone,nm_email,ds_tipo,ds_status) VALUES(:nm_pessoa, :nr_cpf, :nr_rg, :nm_departamento, :nr_telefone, :nm_email, :ds_tipo, :ds_status)");
        $insert->bindValue(":nm_pessoa", $pes->get_nm_nome());
        $insert->bindValue(":nr_cpf", $pes->get_nr_cpf());
        $insert->bindValue(":nr_rg", $pes->get_nr_rg());
		$insert->bindValue(":nm_departamento", $pes->get_nm_departamento());
		$insert->bindValue(":nr_telefone", $pes->get_nr_telefone());
		$insert->bindValue(":nm_email", $pes->get_nm_email());
		$insert->bindValue(":ds_tipo", $pes->get_ds_tipo());
		$insert->bindValue(":ds_status", $pes->get_ds_status());
        $insert->execute();
		}catch(Exception $e){
			print "Não chegou";
		}  
		header("location: frmCadastroPessoas.php");
    }
	
	public function atualizaPessoa(classePessoa $pes){
	  try{
		  //echo "Chegou no DAO";
		  //echo " oooi".$pes->get_id_pessoa();
		  //die;
	    $conec = conec::conecta_mysql("localhost","root","","db_contatos");
        $update = $conec->prepare("UPDATE `tb_pessoa` SET nm_pessoa = :nm_pessoa, nr_cpf = :nr_cpf, nr_rg = :nr_rg, nm_departamento = :nm_departamento, nr_telefone = :nr_telefone, nm_email = :nm_email, ds_tipo = :ds_tipo, ds_status = :ds_status  WHERE id_pessoa = :id_pessoa");
        $update->bindValue(":nm_pessoa", $pes->get_nm_nome());
        $update->bindValue(":nr_cpf", $pes->get_nr_cpf());
        $update->bindValue(":nr_rg", $pes->get_nr_rg());
		$update->bindValue(":nm_departamento", $pes->get_nm_departamento());
		$update->bindValue(":nr_telefone", $pes->get_nr_telefone());
		$update->bindValue(":nm_email", $pes->get_nm_email());
		$update->bindValue(":ds_tipo", $pes->get_ds_tipo());
		$update->bindValue(":ds_status", $pes->get_ds_status());
		$update->bindValue(":id_pessoa", $pes->get_id_pessoa());
		$update->execute();
        //header("location: index.php?success=3");
		}catch(Exception $e){
			echo "Não chegou";
			//header("location: index.php?success=4");
		}  
		header("location: frmCadastroPessoas.php");
	}
	
	public function buscaPessoa(){
	  try{
	    $conec = conec::conecta_mysql("localhost","root","","db_contatos");
		$select = $conec->prepare("SELECT nm_pessoa, nr_cpf, nr_rg  FROM `tb_pessoa`");
		$select->execute();
		return $select;
		}catch(Exception $e){
			print "Não buscou".$e;
		}
	}
	
	public function buscaIdPessoa(){
	 // try{
	    $conec = conec::conecta_mysql("localhost","root","","db_contatos");
		$busca = $conec->prepare("SELECT MAX(id_pessoa) as cod FROM tb_pessoa");
		return $busca->execute();
		//$busca = $busca++;
		//return $busca;
		//}catch(Exception $e){
			//print "Não buscou".$e;
		//}
	}
}
?>
