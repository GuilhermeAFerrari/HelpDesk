<?php
  include_once "classeConexao.php";
  //include_once "controllerPessoa.php";
  $conec = conec::conecta_mysql("localhost","root","","db_contatos");
  $select = $conec->prepare("SELECT id_pessoa, nm_pessoa, nr_cpf, nr_rg  FROM `tb_pessoa`");
  $select->execute();
  $opt = 0;
?>

<HTML>
<HEAD>
<TITLE>Gerencimento de Chamados</TITLE>
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


				
				<form class="form-signin" method="POST" class="login100-form validate-form flex-sb flex-w" action="controllerChamado.php">
					<div class="text-center mb-4">
						<h1 class="h3 mb-3 font-weight-normal">Chamados</h1>
					</div>

					<input class="form-group" type="hidden" name="id">
					
					<div class="form-group">
						<label for="nome">Chamado:</label>
						<textarea class="form-control" rows="6" name="chamado" required style="text-transform:uppercase;"></textarea>
						<!--
						Utilizado para inserir uma pequena linha abaixo do campo de inserção
						<small id="nome" class="form-text text-muted">We'll never share your email with anyone else.'</small>
						-->
					</div>
	
					<div class="form-group">
						<label for="nome">Prioridade:</label>
						<select type="select" class="custom-select" name="prioridade" required style="text-transform:uppercase;">
								
						  		<option value="Alta">Alta</option>
 							    <option value="Media">Media</option>
 							    <option value="Baixa">Baixa</option>

						</select>
					</div>

					<!--<div class="form-group">
						<label for="nome">Solucao:</label>
						<textarea class="form-control" rows="6" name="resolucao"></textarea>
						
					</div>-->
	

					<div class="form-group">
						<label for="nome">Usuario:</label>	
						<select class="custom-select" type="select" name="usuario" 	>

								<?php while($pessoa = $select->fetch()) { ?>
									<option value="<?php echo $pessoa['id_pessoa'];?>"><?php echo $pessoa['nm_pessoa']; ?></option>
 								<?php } ?>

						</select>
					</div>
					
					<div class="form-group">
						<button class="btn btn-primary" type="submit" name="botao" value="1">Abrir Chamado</button>
						<button class="btn btn-primary" type="reset" name="botao">Limpar</button>
						<a href="frmPrincipal2.php" button class="btn btn-primary">Voltar</button></a>
					</div>
</BODY>
</HTML>
