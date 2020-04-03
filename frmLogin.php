<?php
  include_once "classeConexao.php";
?>

<HTML>
<HEAD>
<TITLE>HelpDesk Login</TITLE>
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
	<form class="form-signin" method="POST" class="login100-form validate-form flex-sb flex-w" action="controllerLogin.php">
				
					<div class="text-center">
						<img src="img/logoPrincipal.png" class="rounded mx-auto d-block" size="10%">
					</div>
					<br><br><br>
					<div class="text-center mb-4">
					
						<h1 class="h3 mb-3 font-weight-normal">Login</h1>
					</div>

					<div class="form-group">
						<label for="nome">Usuario:</label>
						<input type="text" class="form-control" name="usuario" aria-describedby="usuario" placeholder="Seu Usuario" required>
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>

					<div class="form-group">
						<label for="nome">Senha:</label>
						<script type="text/javascript">
						$("#password").password('toggle');
						</script>
						<input type="password" class="form-control" name="senha" aria-describedby="senha" placeholder="Sua Senha" required data-toggle="password">
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>

					<div class="form-group">
						<button class="btn btn-primary" align="center" type="submit" name="botao" value="2">Acessar</button>
					</div>

	</form>
		
</BODY>
</HTML>