<?php
  include_once "classeConexao.php";
  include_once "classePessoaDao.php";
  $conec = conec::conecta_mysql("localhost","root","","db_contatos");
  $select = $conec->prepare("SELECT id_chamado, ds_status, ds_chamado, ds_prioridade, ds_resolucao FROM `tb_chamado` WHERE ds_status = 'FECHADO'");
  $select->execute();
?>
<HTML>
<HEAD>



<TITLE>Gerencia de Chamados</TITLE>
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
  <form class="form-signin" class="login100-form validate-form flex-sb flex-w">
	<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Status</th>
								<th scope="col">Descricao</th>
								<th scope="col">Prioridade</th>
								<th scope="col">Resolucao</th>
							</tr>
						</thead>
					<tbody>
						<?php while($chamado = $select->fetch()) { ?>
							<tr>
								<td><?php echo $chamado['id_chamado']; ?></td>
								<td><?php echo $chamado['ds_status']; ?></td>
								<td><?php echo $chamado['ds_chamado']; ?></td>
								<td><?php echo $chamado['ds_prioridade']; ?></td>
								<td><?php echo $chamado['ds_resolucao']; ?></td>
								<!--<td><?php echo "<a href='frmAlterarPessoas.php?id=".$pessoa['id_pessoa']."'>Inativar</a>" ?></td>-->
							</tr>
						<?php } ?>
					</tbody>
	</table>
	<a href="frmPrincipal.php" button class="btn btn-primary">Voltar</button></a>

  </form>
</BODY>