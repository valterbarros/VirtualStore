<?php 
  //conectando ao banco de dados para gerar a lista de produtos dinamico
  $conn = mysqli_connect("localhost","root","valter","WD43");
?>
<!--"Design não é só como uma coisa aparenta, é como ela funciona. - Steve Jobs"-->
<!--Os elemento rederizado no navegador podem se comportar de duas maneiras diferentes em inline ou block, exemplo inline: <span> exemplo em block: <div>-->
<!--Novas tags HTML5, O html é responsavél apenas pelo conteudo a parte decorativa o css faz-->
<!DOCTYPE html>
<html>
  <head>
    <title>Mirror Fashion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/index.css"> <!--stylesheet quer dizer que a folha de estilo é persistente.-->
    <!--Rack descoberto no IE para adcionar suporte ao HTML5, chamado de html5shiv e ele esta dentro de um comentáro condicional e so pode ser interpretado pelo IE9-->
    <!--[if lt IE 9]> 
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/index.js"> </script>
    <!-- toda a regra de mostrar mais produtos esta no index.js -->
    <!-- integração com serviço do google fontes -->
    <link href="https://fonts.googleapis.com css?family=Bad+Script|PT+Sans" rel="stylesheet">
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

  <div class="container destaque">

  <section class="busca">
    <h2>Busca</h2>
    <form action="http://www.google.com.br/search" id="form-busca" onsubmit="validaBusca()">
      <input type="search" name="q" id="q">
      <input type="image" src="img/busca.png">
    </form>
  </section><!-- fim .busca -->

  <section class="menu-departamentos">
    <h2>Departamentos</h2>
    <nav>
      <ul>
        <li><a href="#">Blusas e Camisas</a>
          <ul>
            <li><a href="#">Manga curta</a></li>
            <li><a href="#">Manga comprida</a></li>
            <li><a href="#">Camisa social</a></li>
            <li><a href="#">Camisa casual</a></li>
          </ul>
        </li>
        <li><a href="#">Calças</a></li>
        <li><a href="#">Saias</a></li>
        <li><a href="#">Vestidos</a></li>
        <li><a href="#">Sapatos</a></li>
        <li><a href="#">Bolsas e Carteiras</a></li>
        <li><a href="#">Acessórios</a></li>
      </ul>
    </nav>
  </section><!-- fim .menu-departamentos -->

  <img id="imagem" class="destaque" src="img/destaque-home.png" alt="Promoção: Big City Night">
  <a href="#" class="pause"></a> <!--Botão Pause e Play que vai receber esses estilos de acordo com o js e css juntos-->
  </div><!-- fim .container .destaque -->
  
  <div class="container paineis">
  <!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->
    <section class="painel novidades">
      <h2>Novidades</h2>
      <!-- lista de produtos painel novidades -->
      <?php
        $query  = "SELECT * FROM produtos ORDER BY data DESC LIMIT 0, 15";
        $result = mysqli_query($conn, $query);
        echo "<ol>";
        foreach($result as $dados){
          echo "<li>";
          echo "<a href='produto.php?id=". $dados['id'] ."'>";
          echo "<figure>";
          echo "<img src=img/produtos/miniatura".$dados['id']. ".png>";
          echo "<figcaption>". $dados['nome'] ."</figcaption>";
          echo "</figure>";
          echo "</a>";
          echo "</li>";
        }  
        echo "</ol>";
      ?>
      <!-- fim lista de produtos painel novidades -->
      <button type="button">Mostra mais</button>
    </section>
    
    <section class="painel mais-vendidos">
      <h2>Mais Vendidos</h2>
      <!-- lista de produtos painel mais vendidos -->
      <?php
        $query  = "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 15";
        $result = mysqli_query($conn, $query);
        echo "<ol>";
        foreach($result as $dados){
          echo "<li>";
          echo "<a href='produto.php?id=". $dados['id'] ."'>";
          echo "<figure>";
          echo "<img src=img/produtos/miniatura".$dados['id']. ".png>";
          echo "<figcaption>". $dados['nome'] ."</figcaption>";
          echo "</figure>";
          echo "</a>";
          echo "</li>";
        }  
        echo "</ol>";
      ?>
      <!--fim lista de produtos painel novidades-->
      <button type="button">Mostra mais</button>
    </section>
  
  </div>
 
  <footer class="rodape"> <!--Tag de Rodapé-->
    <!-- Conteúdo do rodapé -->
    <div class="container">
      <img src="img/logo-rodape.png" alt="Logo Mirror Fashion">
      
      <ul class="social">
        <li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
        <li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
        <li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
      </ul>
     </div> 
  </footer>
</body>
</html>