<?php
  include_once "classeConexao.php";
  //include_once "controllerPessoa.php";
  $conec = conec::conecta_mysql("localhost","root","","db_contatos");
  $select = $conec->prepare("SELECT * FROM `tb_chamado` WHERE id_chamado=?");
  $select->execute(array($_GET['id']));
  $linha=$select->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_FIRST);;
?>

<HTML>
<HEAD>
<TITLE>Gerenciar Chamados</TITLE>
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
	alert("Chamado Fechado com Sucesso");
	}	
</script>
				
				<form class="form-signin" method="POST" class="login100-form validate-form flex-sb flex-w" action="controllerChamado.php">
					<div class="text-center mb-4">
						<h1 class="h3 mb-3 font-weight-normal">Fechar Chamado</h1>
					</div>

					<input class="form-group" type="hidden" name="id" value="<?php echo $linha['id_chamado'];?>">

					<div class="form-group">
						<label for="nome">Solucao:</label>
						<textarea class="form-control" rows="6" name="resolucao" style="text-transform:uppercase;"></textarea>
						
					</div>
					
					<div class="form-group">
						<button class="btn btn-primary" type="submit" name="botao" onclick="alterarUsuario()" value="2">Fechar Chamado</button>
						<button class="btn btn-primary" type="reset" name="botao">Limpar</button>
						<a href="frmPrincipal.php" button class="btn btn-primary">Voltar</button></a>
					</div>
</BODY>
</HTML>