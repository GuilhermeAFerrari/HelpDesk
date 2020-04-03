<?php

include_once "classeChamado.php";
include_once "classeConexao.php";

class ChamadoClassDao{

    public function abrirChamado(classeChamado $chamado) {
	  try{
	    $conec = conec::conecta_mysql("localhost","root","","db_contatos");
        $insert = $conec->prepare("INSERT INTO tb_chamado(ds_chamado, ds_prioridade, ds_resolucao, id_pessoa) VALUES(:ds_chamado, :ds_prioridade, :ds_resolucao, :id_pessoa)");
        $insert->bindValue(":ds_chamado", $chamado->get_ds_chamado());
        $insert->bindValue(":ds_prioridade", $chamado->get_ds_prioridade());
        $insert->bindValue(":ds_resolucao", $chamado->get_ds_resolucao());
		$insert->bindValue(":id_pessoa", $chamado->get_id_pessoa());
        $insert->execute();

       header("location: frmPrincipal.php");

		}catch(Exception $e){
			print "Não chegou";
		}  
    }
	
	public function fechaChamado(classeChamado $chamado)
	{
	   try{
	    $conec = conec::conecta_mysql("localhost","root","","db_contatos");
		$update = $conec->prepare("UPDATE `tb_chamado` SET ds_status = :ds_status, ds_resolucao = :ds_resolucao WHERE id_chamado = :id_chamado");
        $update->bindValue(":ds_status", $chamado->get_ds_status());
        $update->bindValue(":ds_resolucao", $chamado->get_ds_resolucao());
        $update->bindValue(":id_chamado", $chamado->get_id_chamado());
		$update->execute();
		header("location: frmBuscaChamado.php");
	   }catch(Exception $e){
	    print "Não chegou";
	   }
	   
	}
}
?>
