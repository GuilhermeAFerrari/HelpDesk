<?php
  include_once "classeConexao.php";

  $conec = conec::conecta_mysql("localhost","root","","db_contatos");
  $select = $conec->prepare("SELECT id_pessoa, nm_pessoa FROM `tb_pessoa`");
  $select->execute();
  
  $busca = $conec->prepare("SELECT id_login FROM `tb_login` WHERE id_login =?");
  $busca->execute(array($_GET['id']));
  $linha=$busca->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_FIRST);
?>

<HTML>
<HEAD>
<TITLE>Alterar Login</TITLE>
<meta charset="iso-8859-1">
    		<!-- Bootstrap core CSS -->
    		<link href="css/bootstrap.min.css" rel="stylesheet">
    		<!-- Custom styles for this template -->
    		<link href="template/floating-labels.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
</HEAD>
<BODY>
<script>
function alterarUsuario(){
	alert("Usuario alterado com Sucesso");
	}	
</script>
	<form class="form-signin" method="POST" class="login100-form validate-form flex-sb flex-w" action="controllerLogin.php" >
					<div class="text-center mb-4">
						<h1 class="h3 mb-3 font-weight-normal">Tec Plus - Alterar Login</h1>
					</div>

					<div class="form-group">					
						<input type="hidden" value="<?php echo $linha['id_login'];?>" class="form-control" name="id" aria-describedby="id" placeholder="" required maxlength="20">
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>

					<div class="form-group">
						<label for="nome">Nome de acesso:</label>
						<input type="text" class="form-control" name="nome" aria-describedby="usuario" placeholder="" required maxlength="20">
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>
							
					<div class="form-group">
						<label for="nome">Nova senha:</label>
						<input type="password" class="form-control" name="senha" aria-describedby="senha" placeholder="" required>
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>

					<div class="form-group">
						<label for="nome">Confirme nova sua senha:</label>
						<input type="password" class="form-control" name="confirmacao" aria-describedby="senha" placeholder="" required>
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>
									
					<div class="form-group">
						<button class="btn btn-primary" type="submit" name="botao" onclick="alterarUsuario()" value="4">Alterar Senha</button>
						<button class="btn btn-primary" type="reset" name="botao">Limpar</button>
						<a href="frmPrincipal.php" button class="btn btn-primary">Voltar</button></a>
					</div>
	</form>

</BODY>
</HTML>