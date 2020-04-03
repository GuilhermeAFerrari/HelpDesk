<?php
  include_once "classeConexao.php";
  //include_once "controllerPessoa.php";
  $conec = conec::conecta_mysql("localhost","root","","db_contatos");
  $select = $conec->prepare("SELECT * FROM `tb_pessoa` WHERE id_pessoa=?");
  $select->execute(array($_GET['id']));
  $linha=$select->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_FIRST);

?>

<!--Inserção de icone da guia-->
<link rel="icon" href="favicon.ico">

<HTML>
<HEAD>
<TITLE>Alteração de Pessoas</TITLE>
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
	alert("Usuario Alterado com Sucesso");
	}	
</script>
				<form class="form-signin" method="POST" class="login100-form validate-form flex-sb flex-w" action="controllerPessoa.php" >
					<div class="text-center mb-4">
						<h1 class="h3 mb-3 font-weight-normal">Alteracao de Pessoas</h1>
					</div>

					<input class="form-group" type="hidden" name="id" value="<?php echo $linha['id_pessoa'];?>">
					
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" class="form-control" name="nome" aria-describedby="nome" placeholder="Seu Nome" required value="<?php echo $linha['nm_pessoa'];?>" maxlength="50" style="text-transform:uppercase;">
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>
					<div class="row">
					<div class="form-group col-md-6">
						<label for="nome">CPF:</label>
						<input type="text" class="form-control" name="cpf" aria-describedby="cpf" placeholder="Seu CPF" required value="<?php echo $linha['nr_cpf'];?>" required data-mask="000.000.000-00">
						<script src="js/mascarasScript2.js"></script>
						<script src="js/mascarasScript.js"></script>
						<script type="text/javascript">
						</script>
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>
						
					<div class="form-group col-md-6">
						<label for="nome">RG:</label>
						<input type="text" class="form-control" name="rg" aria-describedby="rg" placeholder="Seu RG" required value="<?php echo $linha['nr_rg'];?>" required data-mask="00.000.000-0">
						<script src="js/mascarasScript2.js"></script>
						<script src="js/mascarasScript.js"></script>
						<script type="text/javascript">
						</script>
						
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>
					</div>
					<div class="row">
					<div class="form-group col-md-7">
						<label for="nome">Departamento:</label>
						<select type="select" class="custom-select" name="departamento" required style="text-transform:uppercase;">
						        <option value="<?php echo $linha['nm_departamento'];?>"><?php echo $linha['nm_departamento'];?></option>
								<option value="TI">TI</option>
 							    <option value="Almoxarifado">Almoxarifado</option>
 							    <option value="Tesouraria">Tesouraria</option>
								<option value="Financeiro">Financeiro</option>
								<option value="Vendas">Vendas</option>
								<option value="Marketing">Marketing</option>
								<option value="Recepcao">Recepcao</option>

						</select>
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>
					<div class="form-group col-md-5">
						<label for="nome">Tipo:</label>
							<select type="select" class="custom-select" name="tipo" required style="text-transform:uppercase;">
								<option value="<?php echo $linha['ds_tipo'];?>"><?php echo $linha['ds_tipo'];?></option>
						  		<option value="Tecnico">Tecnico</option>
 							    <option value="Usuario">Usuario</option>
 						

						</select>
					</div>
					</div>
					<div class="form-group">
						<label for="nome">Celular:</label>
						<input type="tel" class="form-control" name="telefone" aria-describedby="telefone" placeholder="Seu Celular" required value="<?php echo $linha['nr_telefone'];?>" data-mask="(00)00000-0000">
						<script src="js/mascarasScript2.js"></script>
						<script src="js/mascarasScript.js"></script>
						<script type="text/javascript">
						</script>						
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>
					
					<div class="form-group">
						<label for="nome">E-mail:</label>
						<input type="email" class="form-control" name="email" aria-describedby="email" placeholder="Seu E-mail" required value="<?php echo $linha['nm_email'];?>">
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>
						
					
					<br>
					<div class="form-group">
						<button class="btn btn-primary" type="submit" name="botao" onclick="alterarUsuario()" value="2">Alterar Usuario</button>
						<button class="btn btn-primary" type="reset" name="botao">Limpar</button>
						<a href="frmPrincipal.php" button class="btn btn-primary">Voltar</button></a>
					</div>

				</div>
			</form>
	</BODY>
</HTML>
