<?php
  include_once "classeConexao.php";
?>

<HTML>
<HEAD>
<TITLE>Menu Principal</TITLE>
<meta charset="utf-8">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

</HEAD>
<BODY>



<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Tecplus - HelpDesk</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="frmCadastroPessoas.php">Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="frmGerenciarChamados.php">Abrir Chamado</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="frmBuscaChamado.php">Chamados Abertos</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="frmChamadoFechado.php">Chamados Fechados</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="frmCadastroLogin.php">Criar conta</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="frmEnvioEmail.php">Alterar Senha</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="frmLogin.php">Sair</a>
      </li>
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
    </ul>
  </div>
</nav>
<br><br><br><br><br>
<img src="img/logo.png" class="rounded mx-auto d-block" alt="Responsive image">

</BODY>
</HTML>