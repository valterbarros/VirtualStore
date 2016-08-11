<!-- Meta tags google+ -->
<meta itemprop="name" content="Fuzzy Cardigan">
<meta itemprop="description" content="O Fuzzy Cardigan é fantástico para a
            meia estação, quando o friozinho começa a chegar. Seu estilo
            parisiense  combina com o charme da estação.">
<meta itemprop="image" content="http://localhost:8080/img/produtos/foto2-verde.png">
<!-- fim Meta tags google+ -->

<?php 
  $conn   = mysqli_connect("localhost","root","valter","WD43");
  $query  = "SELECT * FROM produtos where id=" . $_GET['id'];
  $result = mysqli_query($conn, $query);
  $data   = mysqli_fetch_array($result);
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript">
    //Mostrando valores do input rage dentro do output em tempo real
    $( document ).ready(function() {
      $('[name=tamanho]').on('input', function(){
        $('[name=valortamanho]').val(this.value);
      });
    });
  </script>
  <!-- a parte de abertura html e body estão no cabeçalho -->
  <!-- incluido cabeçalho e setando seu title sem responsividade-->
  <?php 
    /*definindo o css e title da pagina atual*/
    $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
    $cabecalho_title = $data['nome'];
    require("header.php"); 
  ?>
  <!-- miolo da pagina -->
  <!-- fundo "elegante" cinza-->
  <div class="produto-back">
  <div class="container">
    <div class="produto">
      <!-- parte de detalhes do produto -->
      <div class="detalhes">
        <h2>Detalhes do produto</h2>

        <p><?php echo $data['descricao'] ?></p>
        <!-- Tabela com caracteristicas do produto -->
        <table>
          <thead>
            <tr>
              <th>Característica</th>
              <th>Detalhe</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Modelo</td>
              <td>Cardigã 7845</td>
            </tr>
            <tr>
              <td>Material</td>
              <td>Algodão e poliester</td>
            </tr>
            <tr>
              <td>Cores</td>
              <td>Azul, Rosa e Verde</td>
            </tr>
            <tr>
              <td>Lavagem</td>
              <td>Lavar a mão</td>
            </tr>
          </tbody>
        </table>
        <!--fim Tabela com caracteristicas do produto -->
      </div>    
      <!-- fim parte de detalhes do produto -->
      <h1><?php echo $data['nome'] ?></h1>
      <p><?php echo $data['preco'] ?></p>
      <!-- botão facebook -->
      <div class="fb-like" data-href="http://lojavirtual.jelasticlw.com.br/" data-send="false" data-layout="box_count" data-width="58" data-show-faces="false"></div>
      <!-- Botão twitter -->
      <a class="twitter-share-button" href="https://twitter.com/intent/tweet" Tweet></a>
      <!-- Botão google + -->
      <div class="g-plusone" data-annotation="inline" data-width="300" data-href="http://lojavirtual.jelasticlw.com.br/"> </div>
      <!-- form para envio ao servidor -->
      <form action="checkout.php" method="POST">
          <fieldset class="cores">
              <legend>Escolha a cor:</legend>
              <!-- imagens e radio  -->
              <input type="radio" name="cor" value="verde" id="verde" checked>
              <label for="verde">
                <img src="img/produtos/foto<?php echo $_GET["id"]; ?>-<?= "verde"?>.png " alt="verde">
              </label>
              
              <input type="radio" name="cor" value="rosa" id="rosa">
              <label for="rosa">
                <img src="img/produtos/foto<?= $_GET["id"] ?>-<?= "rosa" ?>.png" alt="rosa">
              </label>
              
              <input type="radio" name="cor" value="azul" id="azul">
              <label for="azul">
                <img src="img/produtos/foto<?= $_GET["id"] ?>-<?= "azul" ?>.png">
              </label>
              <!--fim!-->
              
              <!-- inputs hidden para passar informações extra -->
              <input type="hidden" name="nome" value="Fuzzy Cardigan">
              <input type="hidden" name="preco" value="129.00">
              <!-- imprimindo valor para enviar ao servidor -->
              <input type="hidden" value="<?php echo $_GET["id"] ?>" name="id">
              <!--fim inputs hidden para passar informações extra -->
          </fieldset>

          <!-- escolher cores -->
          <fieldset class="tamanhos">
            <legend>Escolha o tamanho:</legend>
            <input type="range" min="36" max="46" value="42" step="2" 
             name="tamanho" id="tamanho">
            <output for="tamanho" name="valortamanho">42</output>
          </fieldset>
          <!-- fim escolher cores -->

          <input type="submit" class="comprar" value="Comprar">
      </form>
    </div>
  </div>  
  </div>      
  <!--fim miolo da pagina -->
  <?php require("footer.php"); ?>
  <!-- script botão curtir facebook -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!-- fim script botão curtir facebook -->
  <!-- script botão tweet -->
  <script>
  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
  if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
  js.src="http://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
  </script>
  <!-- fim botão tweet -->
  <!-- script botão google+ -->
  <!-- Posicione esta tag no cabeçalho ou imediatamente antes da tag de fechamento do corpo. -->
  <script src="https://apis.google.com/js/platform.js" async defer>
    {lang: 'pt-BR'}
  </script>  
  <!-- fim script botão google+ -->
</body>
</html>