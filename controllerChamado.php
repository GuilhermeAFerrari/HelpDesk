<?php
include_once "classeChamado.php";
include_once "classeChamadoDao.php";
$valor = $_POST['botao'];

//Analisando opcao desejada atraves de variavel
switch ($valor) {
    case 1:
		//recebendo dados para inserir na tabela do banco
			$ds_status = "";
			$ds_chamado = strtoupper($_POST['chamado']);
			$ds_prioridade = strtoupper($_POST['prioridade']);
			$ds_resolucao = "";
			$id_pessoa = $_POST['usuario'];
			$id_chamado = 1;
			
	  
			//crio minha instancia de um objeto 
			$chamado = new classeChamado($ds_status, $ds_chamado, $ds_prioridade, $ds_resolucao, $id_pessoa, $id_chamado);
			//chamando meu DAO
			$inserir = new ChamadoClassDao();
			$inserir->abrirChamado($chamado);
		break;
	case 2:
	      //recebndo dado para alteração
	      $id_chamado = $_POST['id'];
	      $ds_resolucao = strtoupper($_POST['resolucao']);
		  $ds_status = strtoupper("FECHADO");
		  
		  $ds_chamado = "";
		  $ds_prioridade = "";
		  $id_pessoa = 1;
		  //crio minha instancia de um objeto 
		  $chamado = new classeChamado($ds_status, $ds_chamado, $ds_prioridade, $ds_resolucao, $id_pessoa, $id_chamado);
		  //chamando meu DAO
		  $update = new ChamadoClassDao();
		  $update->fechaChamado($chamado);
	    break;
 }
?>
