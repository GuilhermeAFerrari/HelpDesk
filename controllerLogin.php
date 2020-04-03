<?php
include_once "classeLogin.php";
include_once "classeLoginDao.php";
include_once "envioEmail.php";

$valor = $_POST['botao'];

//Analisando opcao desejada atraves de variavel
switch ($valor) {
    case 1:
		//recebendo dados para inserir na tabela do banco
		if($_POST['senha']==$_POST['confirmacao'])
		{
		   $_POST['senha'] = sha1($_POST['senha']);
		
			$nm_login = $_POST['nome'];
			$ds_senha = $_POST['senha'];
			$id_pessoa = $_POST['pessoa'];
			$id_login = 1;
	  
			//crio minha instancia de um objeto 
			$login = new classeLogin($nm_login, $ds_senha, $id_pessoa, $id_login);
			//chamando meu DAO
			$inserir = new LoginClassDao();
			$inserir->inserirConta($login);
			header("location: frmPrincipal.php");
		}
		else
		{
			echo"<script>
				alert('Usuario e/ou Senha invalido');
				window.location='frmCadastroLogin.php';
				</script>";
		}
		   
		break;
	case 2:
		//recebendo dados para inserir na tabela do banco
		    $nm_login = $_POST['usuario'];
			$ds_senha = $_POST['senha'];
			$id_pessoa = 1;
			$id_login = 1;
			//crio minha instancia de um objeto 
			$login = new classeLogin($nm_login, $ds_senha, $id_pessoa, $id_login);
			//chamando meu DAO
			$busca = new LoginClassDao();
			$valida = $busca->buscaUsuario($login);

			if($valida == 0)
			{//Não deu
			   //header("location: frmLogin.php");
			   echo ("<SCRIPT LANGUAGE='JavaScript'>
			   window.alert('Usuario ou senha Invalidos')
			   window.location.href='frmLogin.php';</SCRIPT>");
			}
			else
			{//Deu certo

			   $buscaTipo = $busca->buscaTipoUsuario($login);
			   $tratamento = $buscaTipo->fetch();
			   $comparacao = strcmp($tratamento['ds_tipo'], "TECNICO");
			   
			   if($comparacao == 0)
			   {
					header("location:frmPrincipal.php");
			   }
			   else
			   {
					header("location:frmPrincipal2.php");
			   }
			}
		break;
	
	case 3:
			//criando variavel que recebe o valor de email
            $nm_email = $_POST['email'];
			//chamando meu DAO
			$busca = new LoginClassDao();
            $busca->buscaEmail($nm_email);
		break;
	case 4:
	    if($_POST['senha']==$_POST['confirmacao'])
		   {
				//criando variavel que recebe o valor de email
				$nm_login = $_POST['nome'];
				$ds_senha = sha1($_POST['senha']);
				$id_pessoa = 1;
				$id_login = $_POST['id'];
			
				$login = new classeLogin($nm_login, $ds_senha, $id_pessoa, $id_login);
				//chamando meu DAO
				$busca = new LoginClassDao();
				$busca->atualizarLogin($login);
				//header("location:frmAlterarLogin.php");
			}
			else
		   {
				header("location:frmPrincipal.php");
			}
		break;
 }
?>