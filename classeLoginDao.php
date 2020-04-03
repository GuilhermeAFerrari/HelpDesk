<?php

include_once "classeLogin.php";
include_once "classeConexao.php";
include_once "classePessoa.php";
include_once "PHPMailer-master/PHPMailerAutoload.php";

class LoginClassDao{

    public function inserirConta(classeLogin $login) {
	  try{
		  print "Chegou no DAO";
	      $conec = conec::conecta_mysql("localhost","root","","db_contatos");
          $insert = $conec->prepare("INSERT INTO tb_login(nm_login, ds_senha, id_pessoa) VALUES(:nm_login, :ds_senha, :id_pessoa)");
          $insert->bindValue(":nm_login", $login->get_nm_login());
          $insert->bindValue(":ds_senha", $login->get_ds_senha());
		  $insert->bindValue(":id_pessoa", $login->get_id_pessoa());
          $insert->execute();
		}catch(Exception $e){
		  print "Não chegou";
		}  
		header("location: index.php");
    }
	
	public function buscaUsuario(classeLogin $login)
	{
	      $count=0;
	    try{
	      $conec = conec::conecta_mysql("localhost","root","","db_contatos");
          $result = $conec->prepare("SELECT * FROM `tb_login` WHERE nm_login = :nm_login and ds_senha = sha1(:ds_senha)");
		  $result->bindValue(":nm_login",$login->get_nm_login());
		  $result->bindValue(":ds_senha",$login->get_ds_senha());
		  $result->execute();
		  $count =  $result->rowCount();
		  //echo $count;
		  //die;
		}catch(Exception $e){
		  print "Não chegou";
		}  
		return $count;
	}
	
	public function buscaTipoUsuario(classeLogin $login)
	{
	      $count=0;
	    try{
	      $conec = conec::conecta_mysql("localhost","root","","db_contatos");
          $result = $conec->prepare("SELECT ds_tipo FROM tb_login Inner JOIN tb_pessoa ON tb_login.id_pessoa = tb_pessoa.id_pessoa WHERE tb_login.nm_login = :nm_login");
		  $result->bindValue(":nm_login",$login->get_nm_login());
		  $result->execute();
		  
		}catch(Exception $e){
		  print "Não chegou";
		}  
		  return $result;
	}
	
	public function buscaEmail($login){
	
		$count=0;
	    try{
	      $conec = conec::conecta_mysql("localhost","root","","db_contatos");
		  $busca = $conec->prepare("SELECT id_login FROM tb_login Inner JOIN tb_pessoa ON tb_login.id_pessoa = tb_pessoa.id_pessoa WHERE tb_pessoa.nm_email = :nm_email");
		  $busca->bindValue(":nm_email",$login);
		  $busca->execute();
		  
		  while($select = $busca->fetch()) {
		      $valida = $select['id_login'];
		  }
          header("location:frmAlterarLogin.php?id=".$valida);			  
		}
		catch(Exception $e){
		  print "Não chegou"; 
		  }
	}

	public function atualizarLogin(classeLogin $login)
	{
	      $count=0;
	    try{
	      $conec = conec::conecta_mysql("localhost","root","","db_contatos");
		  $busca = $conec->prepare("UPDATE tb_login SET nm_login = :nm_login, ds_senha = :ds_senha WHERE id_login = :id_login");
		  $busca->bindValue(":nm_login",$login->get_nm_login());
		  $busca->bindValue(":ds_senha",$login->get_ds_senha());
		  $busca->bindValue(":id_login",$login->get_id_login());
		  $busca->execute();	
		  
 		  header("location:frmEnvioEmail.php");
		}
		catch(Exception $e){
		  print "Não chegou"; 
		  }
	}
}
?>