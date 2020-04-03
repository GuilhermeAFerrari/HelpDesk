<?php
  include_once "classeConexao.php";
?>

<HTML>
<HEAD>
<TITLE>HelpDesk Alterar Senha</TITLE>
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
					
						<h1 class="h3 mb-3 font-weight-normal">Alterar Senha</h1>
					</div>

					<div class="form-group">
						<label for="nome">E-mail:</label>
						<input type="email" class="form-control" name="email" aria-describedby="email" placeholder="Seu E-mail" required>
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>					

					<div class="form-group">
						<button class="btn btn-primary" align="center" type="submit" name="botao" value="3">Enviar</button>
						<a href="frmPrincipal.php" button class="btn btn-primary">Voltar</button></a>
					</div>			
	</form>
		
</BODY>
</HTML>