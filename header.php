<!-- quem incluir o cabeçalho tem que fechar tags body e html -->
<!-- cabeçalho que pode ser reutilizavel em qualquer pagina -->
<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Product">
<head>
	<meta charset="utf-8">
	<!-- imprimindo o cabeçalho dinamico -->
	<title><?php echo $cabecalho_title?></title>
	<!-- @ para dizer q a variavel não é obrigatoria -->
	<?php echo @$cabecalho_css; ?>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">

	<meta name="viewport" content="width=device-width">
</head>
<body>
	<header class="cabecalho container"> <!--Tag de Cabeçalho!-->
	<!-- Conteúdo do cabeçalho -->
	<!-- tag img dentro da tag H1 para dar destaque semantico-->
	<h1> <img src="img/logo.png" class="logotipo"alt="Mirror Fashion"> </h1> 
	<p class="sacola ">
	    Nenhum item na sacola de compras
	</p>
	<nav class="menu-opcoes menu-cabecalho"> <!--Nav é uma tag que indica blocos de navegação primaria-->
	  <ul>
	    <li><a href="#">Sua Conta</a></li>
	    <li><a href="#">Lista de Desejos</a></li>
	    <li><a href="#">Cartão Fidelidade</a></li>
	    <li><a href="sobre.html">Sobre</a></li>
	    <li><a href="#">Ajuda</a></li>
	  </ul>
	</nav>
	</header>

