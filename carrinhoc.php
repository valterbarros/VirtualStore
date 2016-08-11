<?php
	//Pega dados do produto vindos do formulario
	$id             = $_POST['id'];
	$n              = $_POST['nome'];
	$p              = $_POST['preco'];
	$c              = $_POST['cor'];
	$title_document = "Sua lista de compras";

	session_start();
	//adicionar produtos no session carrinho
	$_SESSION['carrinho'][$id] = array("nome" => $n, "preco" => $p, "cor" => $c);
	
	//remover produtos do carrinho
	if($_GET['acao'] == "remover"){
		$id = $_GET['id'];
		unset($_SESSION['carrinho'][$id]);
	}	
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title_document?></title>
</head>
<body>
	<table>
		<thead>
			<th></th>
			<th>NOME</th>
			<th>PREÇO</th>
			<th>COR</th>
		</thead>
		<tbody>
			<!-- sintaxe alternativa para foreach junto ao html -->
			<!-- percorrendo todos os produtos e apresentando na tabela -->
			<?php foreach ($_SESSION['carrinho'] as $id => $dados): ?>
				<tr>
					<td>
						<img width="60px" src="img/produtos/foto<?= $id?>-<?= $dados['cor']?>.png">
					</td>
					<?php foreach ($dados as $value):?>
						<td>
							<?php echo $value?>	
						</td>
					<?php endforeach;?>	
					<td>
						<a href="?acao=remover&id=<?php echo $id?>">Remover</a>
					</td>
				</tr>
			<?php endforeach;?>			
		</tbody>
	</table>
	<a href="index.php">Continuar comprando!</a>
	<a href="checkout.php">Finalizar compra!</a>
</body>
</html>
<?php // var_dump($_SESSION['carrinho']);?>

<?php 
	
?>