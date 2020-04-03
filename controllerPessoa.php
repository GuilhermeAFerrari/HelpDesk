<?php
include_once "classePessoa.php";
include_once "classePessoaDao.php";
$valor = $_POST['botao'];

//Analisando opcao desejada atraves de variavel
switch ($valor) {
    case 1:
		//recebendo dados para inserir na tabela do banco
			$nm_pessoa = strtoupper($_POST['nome']);
			$nr_cpf = $_POST['cpf'];
			$nr_rg = $_POST['rg'];
			$nm_departamento = strtoupper($_POST['departamento']);
			$nr_telefone = $_POST['telefone'];
			$nm_email = $_POST['email'];
			$ds_tipo = strtoupper($_POST['tipo']);
			$ds_status = strtoupper("Ativo");
			$id_pessoa = $_POST['id'];
	  
			//crio minha instancia de um objeto 
			$pes = new classePessoa($nm_pessoa, $nr_cpf, $nr_rg, $nm_departamento, $nr_telefone, $nm_email, $ds_tipo, $ds_status, $id_pessoa);
			//chamando meu DAO
			$inserir = new PessoaClassDao();
			$inserir->inserirPessoa($pes);
		break;
		
    case 2:
        //recebendo dados para atualizar na tabela do banco
			$nm_pessoa = strtoupper($_POST['nome']);
			$nr_cpf = $_POST['cpf'];
			$nr_rg = $_POST['rg'];
			$nm_departamento = strtoupper($_POST['departamento']);
			$nr_telefone = $_POST['telefone'];
			$nm_email = $_POST['email'];
			$ds_tipo = strtoupper($_POST['tipo']);
			$ds_status = strtoupper("Ativo");
			$id_pessoa = $_POST['id'];
	  
			//crio minha instancia de um objeto 
			$pes = new classePessoa($nm_pessoa, $nr_cpf, $nr_rg, $nm_departamento, $nr_telefone, $nm_email, $ds_tipo, $ds_status, $id_pessoa);
			//chamando meu DAO
			$update = new PessoaClassDao();
			$update->atualizaPessoa($pes);
			header("location: frmCadastroPessoas.php");
	    break;
    case 3:
            print "Inativar";
       break;
	case 4:
		header("location: frmPrincipal.php");
       break;
 }
?>
