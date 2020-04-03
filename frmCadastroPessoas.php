<?php
  include_once "classeConexao.php";
  include_once "classePessoaDao.php";
  $conec = conec::conecta_mysql("localhost","root","","db_contatos");
  $select = $conec->prepare("SELECT id_pessoa, nm_pessoa, nr_cpf, nr_rg, nm_departamento, nm_email  FROM `tb_pessoa`");
  $select->execute();
  $busca = new PessoaClassDao();
  $busca->buscaIdPessoa();
?>

<!--Inserção de icone da guia-->
<link rel="icon" href="favicon.ico">

<HTML>
<HEAD>
<TITLE>Cadastro de Pessoas</TITLE>
<meta charset="utf8_encode">
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
	alert("Usuario Inserido com Sucesso");
	}	
</script>
				<form class="form-signin" method="POST" class="login100-form validate-form flex-sb flex-w" action="controllerPessoa.php" >
					<div class="text-center mb-4">
						<h1 class="h3 mb-3 font-weight-normal">Cadastro de Pessoas</h1>
					</div>

					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" pattern="[A-Za-z\s]+$" class="form-control" name="nome" aria-describedby="nome" placeholder="Seu Nome" required  maxlength="50" style="text-transform:uppercase;"  >
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>
					
					<div class="row">
					<div class="form-group col-md-6">
						<label for="nome">CPF:</label>
						<input type="text"  class="form-control" name="cpf" aria-describedby="cpf" placeholder="Seu CPF" required data-mask="000.000.000-00">
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
						<input type="text" class="form-control" name="rg" aria-describedby="rg" placeholder="Seu RG" maxlength="10"">
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
								
						  		<option value="Tecnico">Tecnico</option>
 							    <option value="Usuario">Usuario</option>
 						

						</select>
					</div>
					</div>
						
					<div class="form-group">
						<label for="nome">Celular:</label>
						<input type="tel" class="form-control" name="telefone" aria-describedby="telefone" placeholder="Seu Celular" data-mask="(00)00000-0000">
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
						<input type="email" class="form-control" name="email" aria-describedby="email" placeholder="Seu E-mail" required maxlength="70">
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>
					<br>
					<d 	iv class="form-group">
						<button class="btn btn-primary" type="submit" name="botao" onclick="alterarUsuario()" value="1">Inserir Usuario</button>
						<button class="btn btn-primary" type="reset" name="botao">Limpar</button>
						<a href="frmPrincipal.php" button class="btn btn-primary">Voltar</button></a>
					</div>
			
					<br><br>
				
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col">Departamento</th>
								<th scope="col">E-mail</th>
								<th scope="col">Opcoes</th>
							</tr>
						</thead>
					<tbody>
						<?php while($pessoa = $select->fetch()) { ?>
							<tr>
								<td><?php echo $pessoa['id_pessoa']; ?></td>
								<td><?php echo $pessoa['nm_pessoa']; ?></td>
								<td><?php echo $pessoa['nm_departamento']; ?></td>
								<td><?php echo $pessoa['nm_email']; ?></td>
								<td><?php echo "<a href='frmAlterarPessoas.php?id=".$pessoa['id_pessoa']."'>Alterar</a>" ?></td>
								<!--<td><?php echo "<a href='frmAlterarPessoas.php?id=".$pessoa['id_pessoa']."'>Inativar</a>" ?></td>-->
							</tr>
						<?php } ?>
					</tbody>
				</table>

			</form>
	</BODY>
</HTML>
