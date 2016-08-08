<!-- Este design está dividido em 8 e 4 colunas e 8 em 6 ou seja metade de 8 -->
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Checkout Mirror Fashion</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- configuração para dispositivos moveis -->
  <meta name="viewport" content="width=device-width">
  <script src="js/total.js"></script>
  <script src="js/converteMoeda.js"></script>
</head>
<body>
	<!-- painel responsivo que fica em linha em telas < 768px -->
	<nav class="navbar navbar-default navbar-static-top">
	  <div class="navbar-header">
	    <a class="navbar-brand" href="index.html">Mirror Fashion</a>
	  	<button class="navbar-toggle" type="button"
			  data-target=".navbar-collapse" data-toggle="collapse">
			  menu
			</button>
	  </div>
	  <!-- ocultando os itens em telas menores o js faz aparecer -->
	  <ul class="nav navbar-nav collapse navbar-collapse">
	    <li><a href="sobre.html">Sobre</a></li>
	    <li><a href="#">Ajuda</a></li>
	    <li><a href="#">Perguntas frequentes</a></li>
	    <li><a href="#">Entre em contato</a></li>
	  </ul>
	</nav>

  <div class="jumbotron">
	  <div class="container">
			<!-- h1 e p que já tínhamos -->
	  	<h1>Ótima escolha!</h1>
	  	<p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
		</div><!-- fim .container dentro do jumbotron -->
	</div><!-- fim .jumbotron -->

  <!-- container class bootstrap para manter centralizado -->
  <div class="container">
	  <div class="row">
		  
		  <!-- Painel bootstrap -->
		  <!-- dividindo em 4 colunas -->
		  <div class="col-sm-4">
			  <div class="panel panel-success">
			  	<div class="panel-heading">
			  		<h2 class="panel-title">Sua compra</h2>
			  	</div>	
					<div class="panel-body">	
					  <!-- essa imagem ficar responsiva e oculta em tamanhos extra pequenos -->
					  <img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" class="img-thumbnail img-responsive hidden-xs">
					  <dl>
					    <dt>Produto</dt>
					    <dd><?php echo $_POST['nome']?></dd>

					    <dt>Cor</dt>
					    <dd><?php echo $_POST['cor']?></dd>

					    <dt>Tamanho</dt>
					    <dd><?php echo $_POST['tamanho']?></dd>

					    <dt>Preço</dt>
					    <dd id="preco"><?php echo $_POST['preco']?></dd>
					  </dl>
					  <div class="form-group">
					    <label for="qt">Quantidade</label>
					    <!-- calcula valor total sempre que é digitado algo no input oninput -->
					    <input oninput="calculaEMostraTotal()" id="qt" class="form-control" type="number" min="0" max="99" value="1">
					  </div>
					  <div class="form-group">
					    <label for="total">Total</label>
					    <!-- output é basicamente um input porem o usuario n pode editar -->
					    <output for="qt valor" id="total" class="form-control">
					      <?= $_POST["preco"] ?>
					    </output>
					  </div>
					</div><!-- fim .panel-body -->
				</div><!-- fim .panel -->  
			</div>
			
			<!-- dividindo em 8 colunas -->
			<form class="col-sm-8">
			  
			  <div class="row">
				  <!-- dividindo as 8 colunas na metade -->
				  <fieldset class="col-md-6"> 
				    <legend>Dados pessoais</legend>

					  <div class="form-group">
					    <label for="nome">Nome Completo</label>
					    <input type="text" class="form-control" id="nome" name="nome" autofocus>
					  </div>

					  <div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">  
					  </div>

					  <div class="form-group">
					    <label for="cpf">CPF</label>
					    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
					  </div>

					  <div class="checkbox">
					    <label>
					      <input type="checkbox" value="sim" name="spam" checked>
					      Quero receber spam da Mirror Fashion
					    </label>
					  </div>

				  </fieldset>
			  	
			  	<!-- Oculpando a outra metade -->
			  	<fieldset class="col-md-6">
				    <legend>Cartão de crédito</legend>

					  <div class="form-group">
					    <label for="numero-cartao">Número - CVV</label>
					    <input type="text" class="form-control" 
					           id="numero-cartao" name="numero-cartao">
					  </div>

					  <div class="form-group">
					    <label for="bandeira-cartao">Bandeira</label>
					    <select name="bandeira-cartao" id="bandeira-cartao"
					        class="form-control">
					      <option value="master">MasterCard</option>
					      <option value="visa">VISA</option>
					      <option value="amex">American Express</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="validade-cartao">Validade</label>
					    <input type="month" class="form-control" 
					           id="validade-cartao" name="validade-cartao">
					  </div>
					</fieldset>
			  
			  </div>
		  	
		  	<!-- Botão dentro do form com alinhamento a direita -->
		  	<button type="submit" class="btn btn-primary pull-right">
	    		<span class="glyphicon glyphicon-thumbs-up"></span>
	    		Confirmar Pedido
 		  	</button>

		  </form>
		</div>	
	</div>	
	
	<!-- dar funcionalidade ao menu drop-down -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>